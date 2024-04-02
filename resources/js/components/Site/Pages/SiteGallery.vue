<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode, Navigation, Thumbs } from 'swiper/modules';
import api from "../../../services/api.js";
export default {
    name: "SiteGallery",

    components: {
        Swiper,
        SwiperSlide,
    },

    data(){
        return {
            modules: [FreeMode, Navigation, Thumbs],
            thumbsSwiper: "",
            slides:[],
        }
    },

    computed:{

    },

    mounted(){
        api.getGalleries()
            .then(data => {
                this.slides = data.data;
                this.thumbsSwiper = dtat.data[0].image
            })
            .catch(error => console.error('Error fetching gallery:', error));

    },

    methods:{
        setThumbsSwiper (swiper)  {
            this.thumbsSwiper = swiper;
        }
    }

}
</script>

<template>
        <Swiper
            :style="{
      '--swiper-navigation-color': '#fff',

    }"
            :spaceBetween="10"
            :navigation="true"
            :thumbs="{ swiper: thumbsSwiper }"
            :modules="modules"
            class="mySwiper2"
        >
            <SwiperSlide v-for="item in slides">
                <img :src="item.image">
            </SwiperSlide>
        </Swiper>
        <Swiper
            @swiper="setThumbsSwiper"
            :spaceBetween="10"
            :slidesPerView="4"
            :freeMode="true"
            :watchSlidesProgress="true"
            :modules="modules"
            class="mySwiper"
        >
            <SwiperSlide v-for="item in slides">
                <img :src="item.image" class="myImage"/>
            </SwiperSlide>
        </Swiper>
    <div class="custom"></div>
</template>

<style scoped>


.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    height: 800px;
    /* Center slide text vertically */
    display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 300px;
    object-fit: cover;
}

body {
    background: #000;
    color: #000;
}

.swiper {
    width: 100%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
}

.swiper-slide {
    background-size: cover;
    background-position: center;
}

.mySwiper2 {
    height: 80%;
    width: 100%;
}

.mySwiper {

    box-sizing: border-box;
    padding: 10px 0;
}

.mySwiper .swiper-slide {
    width: 25%;
    height: 300px;
}


.mySwiper .swiper-slide-thumb-active {
    opacity: 1;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.custom{
    margin-bottom: 5px;
}

@media screen and (max-width: 850px){
    .custom{
        margin-bottom: 150px;
    }

    .mySwiper .swiper-slide {
        height: 100%;
    }

}
</style>
