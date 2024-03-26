<script>
import SiteHeader from "../Layouts/SiteHeader.vue";
import CardWrapper from "../../Ui/Card/CardWrapper.vue";
import SiteGlassImage from "./parts/SiteGlassImage.vue";
import ServiceCardWrapper from "../../Ui/ServiceCard/ServiceCardWrapper.vue";
import CarouselWrapper from "../../Ui/Carusel/CarouselWrapper.vue";
import SiteFooter from "../Layouts/SiteFooter.vue";
import api from "../../../services/api.js";
import ContentMain from "./parts/ContentMain.vue";

export default {
    name: "SiteIndex",

    components:{
        ContentMain,
        SiteHeader,
        CardWrapper,
        SiteGlassImage,
        ServiceCardWrapper,
        CarouselWrapper,
        SiteFooter
    },

    data(){
        return {
            local: this.$i18n.locale,
            mainBanner: '',
            glassContent: [],
            glassImage: '',
            cards: [],
            contents:[],
            cleanBanner: '',
            cleanTitle: '',
            services: [],
            lastGallery: [],
        }
    },

    computed:{
        titleClean(){
            const local = this.$i18n.locale;

            if(this.cleanTitle)
                switch (local) {
                    case 'tm':
                        return this.cleanTitle.tm;
                    case 'ru':
                        return this.cleanTitle.ru;
                    case 'en':
                        return this.cleanTitle.en;
                    default:
                        return '';
                }
        }
    },


    mounted(){
        api.getContents()
            .then(data => {
                this.contents = data.data[0]
            })
            .catch(error => console.error('Error fetching contents:', error));

        api.getBanners()
            .then(data => {
                this.mainBanner = data.data[0].image;
                this.glassContent = data.data[1].content;
                this.glassImage = data.data[1].image;
                this.cleanBanner = data.data[2].image;
                this.cleanTitle = data.data[2].title;
            })
            .catch(error => console.error('Error fetching banners:', error));

        api.getCards()
            .then(data => {
                this.cards = data.data
            })
            .catch(error => console.error('Error fetching cards:', error));


        api.getServices()
            .then(data => {
               this.services = data.data;
            })
            .catch(error => console.error('Error fetching services:', error));

        api.getLastGalleries()
            .then(data => {
                this.lastGallery = data.data;
            })
            .catch(error => console.error('Error fetching last gallery:', error));


    }

}
</script>

<template>
    <div class="banner">
        <img :src="mainBanner" alt="Изображение баннера">
    </div>
    <section id="card_wrapper_main">
        <CardWrapper :cards="cards"></CardWrapper>
    </section>
    <section id="president">
        <ContentMain :contents="contents"></ContentMain>
    </section>
    <section>
        <SiteGlassImage :image="glassImage" :content="glassContent"></SiteGlassImage>
    </section>
    <section>
        <ServiceCardWrapper :services="services"></ServiceCardWrapper>
    </section>
    <section>
        <div class="second_banner">
            <img :src="cleanBanner" alt="Изображение баннера">
            <div class="text_banner">
                <h1 class="typed-text">{{titleClean}}</h1>
            </div>
        </div>
    </section>
    <CarouselWrapper :gallery="lastGallery" id="carousel"></CarouselWrapper>
</template>

<style scoped>

section{
    margin-bottom: 50px;
}

#carousel{
    margin-bottom: 100px;
}

.banner {
    width: 100%;
    height: 870px;
    background-color: #333;
    margin-top: 40px;
    color: #fff;
    overflow: hidden;
}
.banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.second_banner {
    width: 100%;
    height: 550px;
    overflow: hidden;
}
.second_banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
}


.second_banner {
    position: relative;
    height: 500px;
    overflow: hidden;
}

.second_banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.text_banner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    text-align: center;
}


.typed-text {
    font: 3vw Montserrat;
    font-weight: 600;
    margin-bottom: 10px;
    width: 31ch;
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid black;
    animation: cursor 0.75s step-end infinite, printed_text 4s steps(29) 3s infinite, 0.5s infinite alternate;

}

@keyframes cursor {
    0% {
        border-color: black;
    }

    50% {
        border-color: transparent;
    }

    100% {
        border-color: black;
    }
}

@keyframes printed_text {
    0% {
        width: 0;
    }
    80% {
        width: 31ch;
    }
    100% {
        width: 31ch;
    }
}



@media screen and (max-width: 1500px) {

    #card_wrapper_main{
        margin-bottom: 400px;
    }

}


@media screen and (max-width: 900px) {

    #card_wrapper_main{
        margin-bottom: 600px;
    }
}


@media screen and (max-width: 600px) {

    #card_wrapper_main{
        margin-bottom: 650px;
    }
}
</style>
