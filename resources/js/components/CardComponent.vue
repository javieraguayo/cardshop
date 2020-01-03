<!-- Componente de la carta-->
<template>
    
       <div class="card px-3 py-3" style="width: 18rem;">
          <img :src="card.url_img" class="card-img-top animated zoomIn" alt="..." >
          <div class="card-body">
            <h5 class="card-title">{{ card.name }}</h5>
            <p class="card-text">Descripcion</p>
            <strong class="card-text">{{ card.price }}</strong>
            <hr>
            <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Añadir al carro</a>
            <!-- <a href="#" class="btn btn-primary"><i class="far fa-heart"></i> Favoritos</a> -->
          </div>
        </div>

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
            console.log('CardComponent mounted.')

        }
    }
</script>
