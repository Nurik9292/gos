<script>
import SiteHeader from "../Layouts/SiteHeader.vue";
import SiteFooter from "../Layouts/SiteFooter.vue";
import AboutContentWrapper from "./parts/AboutContentWrapper.vue";
import api from "../../../services/api.js";

export default {
    name: "SiteAbout",
    components: {AboutContentWrapper, SiteFooter, SiteHeader},

    data(){
        return {
            texts: '',
            contents: [],
            banner: ''
        }
    },

    computed:{
          text(){
              const local = this.$i18n.locale;

              if (this.texts) {
                  switch (local){
                      case 'tm': return this.texts.tm;
                      case 'ru': return this.texts.ru;
                      case 'en': return this.texts.en;
                      default: return '';
                  }
              }

          }
    },

    mounted() {
        api.getAbouts()
            .then(data => {
                console.log(data)
                this.texts = data.data[0].text;
                this.contents = data.data;
            })
            .catch(error => console.error('Error fetching abouts:', error));

        api.getAboutBanner()
            .then(data => {
                console.log(data)

            })
            .catch(error => console.error('Error fetching about banner:', error));
    }
}
</script>

<template>
    <div class="banner">
        <img src="image/5.jpg" alt="Изображение баннера">
    </div>
    <section>
        <div class="text_head">
            <h2>{{ $t('about-main-title') }}</h2>
            <div class="line"></div>
        </div>
        <div class="text_content">
        <p>{{text}}</p>
        </div>
    </section>
    <AboutContentWrapper :contents="contents"></AboutContentWrapper>
</template>

<style scoped>
.banner {
    width: 100%;
    height: 650px;
    background-color: #333;
    margin-top: 40px;
    color: #fff;
    overflow: hidden;
    margin-bottom: 40px;
}
.banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

section{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 40px;
}

.text_head{
    font: 1.8vw Montserrat;
    align-items: center;
    text-align: center;
    font-weight: 600;
    margin-bottom: 100px;
}

h2{
    margin-bottom: 10px;
}

.line{
    width: 280px;
    height: 5px;
    background: #997404;
    margin: 0 auto;
}

.text_content{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 70%;
}

.text_content > p{
    font: 1vw Montserrat;
    line-height: 1.3;
}
</style>
