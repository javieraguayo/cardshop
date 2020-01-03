<!-- Componente de la carta-->
<template>
    
       <div class="card px-3 py-3" style="width: 18rem;">
          <div  class="img">
            <img :src="card.url_img" class="card-img-top animated zoomIn" alt="..." >
            <a href=""><span class="fas fa-search-plus fa-5x text-secondary"></span></a>
          </div>
          
          
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