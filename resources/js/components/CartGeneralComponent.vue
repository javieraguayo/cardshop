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
                <cart-component></cart-component>
                

                
              </tbody>
            </table>
          </div>
    


        
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
        MostrarCarro: function (event) {
          
        }
    }
    }
</script>
