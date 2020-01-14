<!-- componente de carro de compra contenedor-->
<template>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" class="border-0 bg-light" colspan="2">
            <div class="p-2 px-3 text-uppercase">Producto</div>
          </th>
          <th scope="col" class="border-0 bg-light">
            <div class="py-2 text-uppercase">Precio</div>
          </th>
          <th scope="col" class="border-0 bg-light">
            <div class="py-2 text-uppercase">Cantidad</div>
          </th>
          <th scope="col" class="border-0 bg-light">
            <div class="py-2 text-uppercase">Eliminar</div>
          </th>
        </tr>
      </thead>
      <tbody>
        <cart-component v-for="(product, index) in products" :key="product.id" :product="product"></cart-component>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
        data(){//datos del componente
            return{//
                products : [],
                EmptyCart : false
            }
        },
        mounted() {
            // console.log('Component mounted.')
            this.getAllData();
            this.$root.$on('updatecart', card => {
             this.getAllData();
             console.log(card);
            });  
        },
        methods: {
          getAllData: function () {
              axios.get('./Cart')
            .then((response) =>{
            let validatempty  = response.data.length;

            if (validatempty > 0) {
              this.products = response.data;//lleno notas 
              console.log(this.products[0].name);
              console.log(this.products[0].price);
              this.$root.$emit('countproduct', this.products);
            }
            
            })
            .catch(function (error) {
            console.log('ocurrio un error');
            console.log(error);
            })
            .finally(function () {
            // always executed
            });
          }
        },
}
</script>
