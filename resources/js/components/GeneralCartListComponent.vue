<!-- Este componente lista las cartas en el home-->
<template>
    <div class="row justify-content-end">
        <card-component v-for="(card, index) in cards" :key="cards.id" :card="card" class="col-12 col-md-3 mr-2 mb-4" >
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
            axios.get('./product')
            .then((response) =>{
            this.cards = response.data;//lleno notas 
            console.log(this.cards[0].name);
            console.log(this.cards[0].price);
            })
            .catch(function (error) {
            console.log('ocurrio un error');
            console.log(error);
            })
            .finally(function () {
            // always executed
            });
        }
    }
</script>
