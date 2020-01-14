<template>
    
        <tr>
            <th class="border-0">
              <div>
                <img :src="product.url_img" alt="" width="70" class="img-fluid rounded shadow-sm">
                <div class="ml-3 align-middle  .d-none .d-lg-block .d-xl-none">
                  <!-- <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">ORCUS</a></h5> -->
                <!--   <span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span> -->
                </div>
              </div>
            </th>
            <td class="border-0 align-middle"><strong>{{ product.name }}</strong></td>
            <td class="border-0 align-middle"><strong>${{ product.price }}</strong></td>
            <td class="border-0 align-middle"> <input class="form-control input-sm" type="number" :value="product.quantity"></td>
            <td class="border-0 align-middle"><a href="#" class="text-danger" title="Eliminar"><i class="fa fa-trash"></i></a></td>
        </tr>
            

</template>

<script>
    export default {
        props: ['product'],
        data(){//datos del componentes
            
            return{//
                cards : []
            }
        },
        mounted() {
            console.log('Component CartComponent.')
            
        }
    }
</script>
