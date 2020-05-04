<!-- Componente de la carta-->
<template>
    
      <!--  <div class="card px-3 py-3" style="width: 18rem;">
          <div  class="img">
            <img :src="card.url_img" class="card-img-top animated zoomIn" alt="..." >
            <a><span class="fas fa-search-plus fa-5x text-secondary"></span></a>
          </div> -->
          <!-- //alinear botones a multiples pantallas
             You can use the following Bootstrap 4 modifier classes:
             Add d-flex to .card-body
             Add flex-column to .card-body
             Add mt-auto to .btn nested in .card-body
            -->
      <!--     
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ card.name }}</h5>
            <p class="card-text">Descripcion</p>
            <strong class="card-text">${{ formatPrice(card.price) }}</strong>
            <hr>
            
            <button class="btn btn-primary mt-auto" v-on:click="addProduct(card)"><i class="fas fa-plus icon_btn_add"></i> Agregar</button> -->
            <!-- <a href="#" class="btn btn-primary"><i class="far fa-heart"></i> Favoritos</a> -->
          <!-- </div>
        </div> -->



  
  <v-row>
    
  <v-card hover>
    <v-responsive :aspect-ratio="16/9">
    <v-img
      class="white--text"
      :src="card.url_img">
      <template v-slot:placeholder>
                      <v-layout
                        fill-height
                        align-center
                        justify-center
                        ma-0>
                      <v-progress-circular indeterminate color="primary"></v-progress-circular>
                      </v-layout>
                    </template>
      <!-- <v-card-title>{{ card.name }}</v-card-title> -->

    </v-img>

    <!-- <v-card-subtitle class="pb-0">Number 10</v-card-subtitle> -->

    <v-card-text class="text--primary">
      <div>{{ card.name }}</div>

      <div>Whitsunday Island, Whitsunday Islands</div>
    </v-card-text>

    <v-card-actions>
      <div class="text-center ma-2">
        <v-btn rounded color="success"><span class="material-icons">add_shopping_cart</span>Añadir al Carrito</v-btn>
      </div>
      
      <v-tooltip bottom>
      <template v-slot:activator="{ on }">
        <v-btn class="mx-2" fab dark small color="pink"  dark v-on="on"><v-icon dark>mdi-heart</v-icon></v-btn>
      </template>
      <span>Añadir a Favoritos</span>
    </v-tooltip>
    

    </v-card-actions>
  </v-responsive>
  </v-card>
 </v-row>
</template>

<script>
    export default {
        props: ['card'],//datos que llegan de otro componente
        //si el objeto viene de un componente exterior no hay que definirlo en la data
         data(){//datos del componente
            return{//
               editMode : false
            };  
        },
        mounted() {
            
            
        },
        created(){
           
        },
         methods: {
          formatPrice(value) {
           let val = (value/1).toFixed(0).replace('.', ',')
          return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
          },

          addProduct: function (card) {
            
            // console.log(JSON.stringify(card))
            
           
            axios.post('./Cart', card)
            .then((response) =>{
                this.$root.$emit('updatecart', card);
            })
            .catch(function (error) {
          
      
            })
            .finally(function () {
          
            });
             // $('.icon_btn_add').removeClass().addClass('fa fa-check animated zoomIn');
          // `this` inside methods points to the Vue instance
          
        }
      }
    }
</script>
<style>
/*css icon zoom img*/
.img {
    position: relative;
    display: inline-block; /* added */
    overflow: hidden; /* added */
}

.img img:hover {
    
    opacity: 0.5;
    
}
.img:hover a {
    opacity: 0.5; /* added */
    top: 0; /* added */
    z-index: 500;
    background-color: #e6e6e6;
}
/* added */
.img:hover a span {
    top: 50%;
    position: absolute;
    left: 0;
    right: 0;
    transform: translateY(-50%);
}
/* added */
.img a {
    display: block;
    position: absolute;
    top: -100%;
    opacity: 0;
    left: 0;
    bottom: 0;
    right: 0;
    text-align: center;
    color: inherit;

}
/* end css icon zoom img*/
</style>