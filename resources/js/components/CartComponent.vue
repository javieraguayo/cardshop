<template>
  
    <div class="col-md-12">
      
    <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
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
                 <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="https://optcg.com/1354-product_default/orcus.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">ORCUS</a></h5><!-- <span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span> -->
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>$2.500</strong></td>
                  <td class="border-0 align-middle"><strong>1</strong></td>
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="https://optcg.com/2-product_default/shoki-el-cazador-l.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">SHOKI EL CAZADOR L</a></h5><!-- <span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span> -->
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>$3.750</strong></td>
                  <td class="border-0 align-middle"><strong>3</strong></td>
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>


        
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
