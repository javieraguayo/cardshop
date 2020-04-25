<template>
    <div>
        <div class="row pr-3">
            <li><a href="#" id="cart" class="nav-link" data-toggle="modal" data-target="#modalcart"><i class="fa fa-shopping-cart" ></i> Carrito <span class="badge">{{totalAmount()}}</span></a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{this.auth}}<span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" @click.prevent="logout()">
                        Cerrar
                    </a>

                   <!--  <form id="logout-form" action="" method="GET" style="display: none;">
                        @csrf
                    </form> -->
                </div>
            </li>  


        </div>
    </div> 
</template>

<script>
    export default {
        props: ['auth'],//datos que llegan de otro componente
        //si el objeto viene de un componente exterior no hay que definirlo en la data
        data(){//datos del componente
            return{//
              count : 0,
              products : [],
            };  
        },
        mounted() {
        
            this.$root.$on('countproduct', products => {
            this.products = products;


            });  
        },
        computed: {
                
        },
        methods: {
              logout:function(){
               axios.post('./logout').then(response => {
                  if (response.status === 302 || 401) {
                        window.location.href = './login';
                  }
                  else {
                    // throw error and go to catch block
                  }
                }).catch(error => {

              });
        },
        totalAmount: function () {
                    var sum = 0;
                    this.products.forEach(e => {
                        sum += e.quantity;
                    });
                    return sum
        },
    }
}
</script>
