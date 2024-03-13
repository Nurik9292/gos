<script>
import SiteHeader from "../Layouts/SiteHeader.vue";
import CardWrapper from "../../Ui/Card/CardWrapper.vue";
import SiteGlassImage from "./parts/SiteGlassImage.vue";
import ServiceCardWrapper from "../../Ui/ServiceCard/ServiceCardWrapper.vue";
import CarouselWrapper from "../../Ui/Carusel/CarouselWrapper.vue";
import SiteFooter from "../Layouts/SiteFooter.vue";

export default {
    name: "SiteIndex",

    components:{
        SiteHeader,
        CardWrapper,
        SiteGlassImage,
        ServiceCardWrapper,
        CarouselWrapper,
        SiteFooter
    },

}
</script>

<template>
    <div class="banner">
        <img src="image/5.jpg" alt="Изображение баннера">
    </div>
    <section id="card_wrapper_main">
        <CardWrapper></CardWrapper>
    </section>
    <section id="president">
        <div class="part">
            <div class="image">
                <img src="image/art2.webp" alt="Not art">
            </div>
            <div class="content">
                <h1>Президент Туркменистана</h1>
                <p>
                    2024 год в Туркменистане объявлен годом
                    <br><i>Кладезь разума</i><br><i>Махтумкули Фраги</i><br>
                    В соответствии с Постановлением О праздновании 300 летия со дня рождения
                    великоо мыслителя и поэта-классика Востока Махтукули Фраги, в стране
                    и за рубежом проводится комплексная работа в целях изучения и
                    популяризации в мире богатого и бисценного литературного наследия великого мастера слов
                </p>
            </div>
        </div>
    </section>
    <section>
        <SiteGlassImage></SiteGlassImage>
    </section>
    <section>
        <ServiceCardWrapper></ServiceCardWrapper>
    </section>
    <section>
        <div class="second_banner">
            <img src="image/otel.jpg" alt="Изображение баннера">
            <div class="text_banner">
                <h1 class="typed-text">Чистота города под нашем контролем</h1>
            </div>
        </div>
    </section>
    <CarouselWrapper id="carousel"></CarouselWrapper>
</template>

<style scoped>

section{
    margin-bottom: 20px;
}

#carousel{
    margin-bottom: 100px;
}

.banner {
    width: 100%;
    height: 650px;
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

.part{
    width: 60%;
    display: flex;
    justify-content: space-between;
}

.image img{
    width: 500px;
    height: 650px;
}

.content{
    width: 50%;
    font: 1.1vw Montserrat;
    text-align: right
}

.content p{
    line-height: 1.5;
}

.content i, em {
    font-style: italic;
    width: 600px;
    margin-left: auto;
    font-size: 1.8vw;
}



.content h1{
    font-weight: 600;
}

#president{
    margin-bottom: 40px;
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
    animation: cursor 0.75s step-end infinite, printed_text 3s steps(29) infinite, 0.5s infinite alternate;

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
    from {
        width: 0;
    }
}



@media screen and (max-width: 2150px) {
    .image img{
        width: 400px;
        height: 550px;
    }

}

@media screen and (max-width: 1900px) {



    .content span {
        width: 400px;
    }
}

@media screen and (max-width: 1500px) {

    .image img{
        width: 300px;
        height: 400px;
    }


    .content span {
        width: 400px;
    }

    #card_wrapper_main{
        margin-bottom: 400px;
    }

}

@media screen and (max-width: 1200px) {


    .content span {
        width: 300px;
    }

}

@media screen and (max-width: 900px) {


    .content span {
        width: 200px;
    }

    #card_wrapper_main{
        margin-bottom: 600px;
    }
}

@media screen and (max-width: 800px) {

    .part{
        width: 100%;
        flex-direction: column;
        align-items: center;
    }

    .image img{
        width: 300px;
    }
}

@media screen and (max-width: 600px) {

    .part{
        width: 100%;
        flex-direction: column;
        align-items: center;
    }

    .content{
        width: 50%;
        font: 15px Montserrat;
        text-align: right
    }

    .image img{
        width: 300px;
    }

    #card_wrapper_main{
        margin-bottom: 650px;
    }
}
</style>
