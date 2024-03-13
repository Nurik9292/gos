<script>
import SwiperCore from "swiper";

import { Navigation, Pagination,  Scrollbar, A11y, EffectCoverflow} from 'swiper/modules';

import { Swiper, SwiperSlide } from 'swiper/vue';

SwiperCore.use([Pagination, Navigation]);

export default {
    name: "SiteCarousel",

    components: {
        Swiper,
        SwiperSlide,
        Scrollbar,
        A11y,
        EffectCoverflow
    },
    data(){
        return{
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

            modules: [Navigation, Pagination, Scrollbar, A11y, EffectCoverflow],
       }
    },

    methods(){
        function onSwiper(swiper) {
            console.log(swiper);
        }

        function onSlideChange() {
            console.log('slide change');
        }
    }

}

function onSwiper(swiper) {
    console.log(swiper);
}

function onSlideChange() {
    console.log('slide change');
}
</script>

<template>
    <div class="container">
        <Swiper :modules="modules"
                effect="coverflow"
                :grabCursor="true"
                :centeredSlides="true"
                :loop="true"
                slidesPerView="auto"
                :coverflowEffect="{
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5}"
                :pagination="{
                el: '.swiper-pagination',
                clickable: true,
                }"
                :navigation="{
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                }"

                class="tranding-slider">

                <!-- Slide-start -->
                <SwiperSlide v-for="image in slides" class="tranding-slide">
                    <div class="tranding-slide-img">
                        <img :src="image" alt="Tranding">
                    </div>
                </SwiperSlide>

                <!-- Slide-end -->


            <div class="tranding-slider-control">
<!--                <div class="swiper-button-prev slider-arrow">-->
<!--                    <icon icon="fa-solid fa-arrow-left" name="arrow-back-outline" />-->
<!--                </div>-->
<!--                <div class="swiper-button-next slider-arrow ">-->
<!--                    <icon icon="fa-solid fa-arrow-right" name="arrow-forward-outline" />-->
<!--                </div>-->
                <div class="swiper-pagination"></div>
            </div>

        </Swiper>
    </div>
</template>




<style scoped>

:root {
    --primary: #ec994b;
    --white: #ffffff;
    --bg: #f5f5f5;
}


::-webkit-scrollbar {
    width: 1.3rem;
}

::-webkit-scrollbar-thumb {
    border-radius: 1rem;
    background: #797979;
    transition: all 0.5s ease-in-out;
}

::-webkit-scrollbar-thumb:hover {
    background: #222224;
}

::-webkit-scrollbar-track {
    background: #f9f9f9;
}


.container {
    max-width: 124rem;
    padding: 0 1rem;
    margin: 0 auto;
}





@media (max-width:500px) {
    .tranding-slider {
        height: 45rem;
    }
}

.tranding-slide {
    width: 37rem;
    height: 32rem;
    position: relative;
}

@media (max-width:500px) {
    .tranding-slide {
        width: 28rem !important;
        height: 36rem !important;
    }
    .tranding-slide .tranding-slide-img img {
        width: 28rem !important;
        height: 36rem !important;
    }
}

.tranding-slide .tranding-slide-img img {
    width: 37rem;
    height: 32rem;
    border-radius: 2rem;
    object-fit: cover;
}

.tranding-slide .tranding-slide-content {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}

.tranding-slide-content .food-price {
    position: absolute;
    top: 2rem;
    right: 2rem;
    color: var(--white);
}

.tranding-slide-content .tranding-slide-content-bottom {
    position: absolute;
    bottom: 2rem;
    left: 2rem;
    color: var(--white);
}


.rating ion-icon {
    color: var(--primary);
}

.swiper-slide-shadow-left,
.swiper-slide-shadow-right {
    display: none;
}

.tranding-slider-control {
    position: relative;
    bottom: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tranding-slider-control .swiper-button-next {
    left: 58% !important;
    transform: translateX(-58%) !important;
}

@media (max-width:990px) {
    .tranding-slider-control .swiper-button-next {
        left: 70% !important;
        transform: translateX(-70%) !important;
    }
}

@media (max-width:450px) {
    .tranding-slider-control .swiper-button-next {
        left: 80% !important;
        transform: translateX(-80%) !important;
    }
}

@media (max-width:990px) {
    .tranding-slider-control .swiper-button-prev {
        left: 30% !important;
        transform: translateX(-30%) !important;
    }
}

@media (max-width:450px) {
    .tranding-slider-control .swiper-button-prev {
        left: 20% !important;
        transform: translateX(-20%) !important;
    }
}

.tranding-slider-control .slider-arrow {
    background: white;
    width: 3.5rem;
    height: 3.5rem;
    border-radius: 50%;
    left: 42%;
    transform: translateX(-42%);
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
}


.slider-arrow{
    font-size: 2rem;
    color: #222224;
}

.tranding-slider-control .slider-arrow::after {
    content: '';
}

.tranding-slider-control .swiper-pagination {
    position: relative;
    width: 15rem;
    bottom: 1rem;
}

.tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
    filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
}

.tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
    background: var(--primary);
}
</style>
