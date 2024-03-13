<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode, Navigation, Thumbs } from 'swiper/modules';
export default {
    name: "SiteGallery",

    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {


        return {


        };
    },

    data(){
        return {
            modules: [FreeMode, Navigation, Thumbs],
            thumbsSwiper: "/image/gallery/gallery1.jpg",
            slides:[
                "/image/gallery/gallery1.jpg",
                "/image/gallery/gallery2.jpg",
                "/image/gallery/gallery3.jpg",
                "/image/gallery/gallery4.jpg",
                "/image/gallery/gallery5.jpg",
                "/image/gallery/gallery6.jpg",
                "/image/gallery/gallery7.jpg",
                "/image/gallery/gallery8.jpg",
            ],
        }
    },

    computed:{
        setThumbsSwiper (swiper)  {
            console.log(swiper)
            this.thumbsSwiper = swiper;
        }
    },

}
</script>

<template>
    <Swiper
        :style="{
      '--swiper-navigation-color': '#fff',
      '--swiper-pagination-color': '#fff',
    }"
        :spaceBetween="10"
        :navigation="true"
        :thumbs="{ swiper: thumbsSwiper }"
        :modules="modules"
        class="mySwiper2 swiper"
    >
        <SwiperSlide v-for="image in slides">
            <img :src="image">
        </SwiperSlide>
    </Swiper>
    <Swiper
        @swiper="setThumbsSwiper"
        :spaceBetween="10"
        :slidesPerView="4"
        :freeMode="true"
        :watchSlidesProgress="true"
        :modules="modules"
        class="mySwiper swiper"
    >
        <SwiperSlide v-for="image in slides">
            <img :src="image" />
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

    /* Center slide text vertically */
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
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
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
}

.mySwiper .swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
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
}
</style>
