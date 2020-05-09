<!-- Este componente lista las cartas en el home-->
<template>
<v-container fluid>
    <v-row>
        <v-col v-for="(card, index) in cards" :key="cards.id"   :cols="card.flex" cols="12" xl="3" md="4" lg="3" sm="6">
        <v-card flat hover class="d-flex flex-column justify-center pa-4" style="border-radius:25px;">
            <v-responsive>
                    <v-img aspect-ratio="0.7" class="white--text" :src="card.url_img" max-height="80%">
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

                      <v-card-subtitle class="pb-0 font-weight-black" style="font-size: 1.2em;">${{ formatPrice(card.price) }}</v-card-subtitle>

                      <v-card-text class="text--primary">
                        <div class="font-weight-bold">{{ card.name }}</div>
                        <v-rating
                        v-model="rating"
                        background-color="orange lighten-3"
                        color="orange">   
                        </v-rating>
                        <!-- <div>Whitsunday Island, Whitsunday Islands</div> -->
                      </v-card-text>

                      <v-card-actions>
                          <div class="text-center ma-1">
                            <v-btn :loading="loading" :disabled="loading" @click="loader = 'loading'" rounded color="success" v-on:click="addProduct(card)"><span class="material-icons">add_shopping_cart</span>Añadir al Carro</v-btn>
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
      </v-col>
   </v-row>
</v-container>

</template>

<script>
    export default {

        data(){//datos del componentes
            return{//
                loader: null,
                loading: false,
                cards : [],
                loading : false,
                rating: 4
            }
        },
         watch: {
      loader () {
        const l = this.loader
        this[l] = !this[l]

        setTimeout(() => (this[l] = false), 3000)

        this.loader = null
      },
    },
        mounted() {
            //para hacer una consulta ajax a un controlador 
            //basado en promesas 
            axios.get('./Product')
            .then((response) =>{
            this.cards = response.data;//lleno notas 
            
            })
            .catch(function (error) {
            console.log('ocurrio un error');
            console.log(error);
            })
            .finally(function () {
            // always executed
            });
        },
         methods:{
            updatecart(card){ 
                this.cards.push(card);
            },
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