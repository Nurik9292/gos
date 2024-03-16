<script>

import ServiceCard from "./ServiceCard.vue";
export default {
    name: "ServiceCardWrapper",

    components:{
        ServiceCard
    },

    props:["services"],

    data(){
        return{

        }
    },

    computed:{
        contents() {
            const local = this.$i18n.locale;
            if (this.services) {
                const translations = {
                    tm: service => ({ content: service.content.tm, image: service.image }),
                    ru: service => ({ content: service.content.ru, image: service.image }),
                    en: service => ({ content: service.content.en, image: service.image }),
                };
                return this.services.map(service => translations[local](service));
            }

            return '';
        }
    }
}
</script>

<template>
    <div class="main">
        <div class="text">
            <h2>{{ $t('our-service') }}</h2>
            <div class="line"></div>
        </div>
        <div class="service_block">
            <ServiceCard v-for="item in contents" :text="item.content" :image="item.image"></ServiceCard>

        </div>
    </div>
</template>

<style scoped>
    .main{
        width: 70%;
        height: 1000px;
        display: flex;
        flex-direction: column;
    }

    .text{
        width: 100%;
        font: 1.2vw Montserrat;
        align-items: center;
        text-align: center;
        font-weight: 600;
        margin-bottom: 50px;
    }

    h2{
        margin-bottom: 20px;
    }

    .line{
        width: 150px;
        height: 5px;
        background: #997404;
        margin: 0 auto;
    }

    .service_block {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }

    .service_block > * {
        width: calc(33.33% - 10px);
        margin: 5px;
    }

    @media screen and (max-width: 1500px){
        .main{
            width: 100%;
            height: 600px;
        }
    }

    @media screen and (max-width: 800px){
        .main{
            width: 100%;
        }
    }

</style>
