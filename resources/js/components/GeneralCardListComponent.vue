<!-- Este componente lista las cartas en el home-->
<template>
    <div class="row justify-content-end">
        <card-component v-for="(card, index) in cards" :key="cards.id" :card="card" class="col-12 col-md-3 ml-1 my-1">
        </card-component>
    </div> 
</template>

<script>
    export default {

        data(){//datos del componentes
            return{//
                cards : []
            }
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
                console.log("llego al padre");
            }
            
        }
    
    }
</script>
