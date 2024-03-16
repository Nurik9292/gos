<script>
export default {
    name: "AboutContentLeft",

    props: ["about"],

    computed:{
        title(){
            const local = this.$i18n.locale;
            if (this.about && this.about.title) {
                switch (local) {
                    case 'tm': return this.about.title.tm;
                    case 'ru': return this.about.title.ru;
                    case 'en': return this.about.title.en;
                    default: return '';
                }
            }
        },

        content(){
            const local = this.$i18n.locale;
            if (this.about && this.about.content) {
                switch (local) {
                    case 'tm': return this.about.content.tm;
                    case 'ru': return this.about.content.ru;
                    case 'en': return this.about.content.en;
                    default: return '';
                }
            }
        },

        image(){
            if (this.about && this.about.image)
                return this.about.image;
        }
    }
}
</script>

<template>
    <div class="about_content">
        <img :src="image" alt="not found">
        <div class="about_content_text">
            <h3>{{title}}</h3>
            <p>{{content}}</p>
        </div>
    </div>
</template>

<style scoped>
    .about_content{
        display: flex;
        justify-content: space-between;
    }

    img{
        width: 50%;
        height: auto;
        border-radius: 50px;
        margin-right: 50px;
    }

    .about_content_text{
        width: 50%;
    }

    h3{
        font: 1.8vw Montserrat;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
    }

    p{
        font: 1.3vw Montserrat;
        line-height: 1.2;
    }

    @media screen and(max-width: 800px){


        img{
            width: 50%;
            height: 250px;
        }
    }

</style>
