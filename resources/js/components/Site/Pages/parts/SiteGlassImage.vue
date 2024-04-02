<script>

export default {
    name: "SiteGlassImage",

    props:["image", "content"],

    computed:{

        getContent () {
            const local = this.$i18n.locale;

            switch (local) {
                case 'tm':
                    return this.content.tm;
                case 'ru':
                    return this.content.ru;
                case 'en':
                    return this.content.en;
                default:
                    return '';
            }
        }
    },


    methods: {}
}
</script>

<template>
    <div class="main_glass">
        <div class="text_head">
            <h2>
               {{ $t('association') }}
            </h2>
            <div class="line"></div>
        </div>
        <div class="image_head">
            <div class="image_head_content">
                <p>
                    {{ getContent }}
                </p>
            </div>
            <div class="image_head_image fx_shine_hover">
                <div>
                    <img :src="image" alt="Not found image">
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.main_glass{
    display: flex;
    width: 100%;
    flex-direction: column;
}


.text_head{
    font: 1.2vw Montserrat;
    align-items: center;
    text-align: center;
    font-weight: 600;
    margin-bottom: 50px;
    justify-items: center;
}

h2{
    display: block;
    width: 650px;
    margin: 0 auto;
}

.line{
    width: 230px;
    height: 5px;
    background: #997404;
    margin: 0 auto;
}

.image_head{
    display: flex;
    justify-content: flex-end;
}

.image_head_content{
    position: absolute;
    left: 0;
    z-index: 3;
    border-bottom: 350px solid #012c00;
    border-right: 350px solid transparent;
    height: 0;
    width: 50%;
    font: 1vw/1vw Montserrat;
    color: white;
    text-align: left;
    line-height: 1.8;
    font-weight: 600;
}

.image_head_image{
    height: 350px;
    width: 50%;

}


.image_head_image img{
    height: 350px;
    object-fit: cover;
    width: 100%;
}

p{
    padding-top: 40px;
    padding-left: 20px;
}

.fx_shine_hover {
    position: relative;
    overflow: hidden;
    z-index: 1;
    top: -140%;
    transition: top 0.25s cubic-bezier(0, 0.3, 1, 1.7);

}


.fx_shine_hover:hover {
    top: 140%;
}

.fx_shine_hover:before, .fx_shine_hover:after {
    content:'';
    display: block;
    position: absolute;
    height: 100%;
}
.fx_shine_hover:before {
    width: 140%;
    top: inherit;
    left: -20%;
    opacity: 0.6;
    background-image: linear-gradient(180deg, rgba(255, 255, 255, 0), #ffffff 40%, rgba(255, 255, 255, 0.6) 60%, rgba(255, 255, 255, 0));
    transform: rotate(-20deg);
}
.fx_shine_hover:after {
    width: 100%;
    top: 0;
    border-radius: 50%;
    box-shadow: inset -5px -15px 40px rgba(0, 0, 0, 0.1);
}



@media screen and (max-width: 1250px){
    .image_head_content{
        border-bottom: 250px solid #0a3622;
    }


    .image_head_image{
        height: 250px;
        width: 50%;
    }

    .image_head_image img{
        height: 250px;
    }
}

@media screen and (max-width: 900px){
    .image_head_content{
        border-bottom: 200px solid #0a3622;
        border-right: 200px solid transparent;
    }


    .image_head_image{
        height: 200px;
        width: 50%;
    }

    .image_head_image img{
        height: 200px;
    }
}

@media screen and (max-width: 750px){
    .image_head_content{
        border-bottom: 150px solid #0a3622;
        border-right: 150px solid transparent;
    }

    .image_head_image{
        height: 150px;
        width: 50%;
    }

    .image_head_image img{
        height: 150px;
    }

}

@media screen and (max-width: 600px){
    .image_head_content{
        border-bottom: 100px solid #0a3622;
        border-right: 100px solid transparent;
    }

    .image_head_image{
        height: 100px;
        width: 50%;
    }

    .image_head_image img{
        height: 100px;
    }

    p{
        padding-top: 20px;
        padding-left: 20px;
    }

    .line{
        width: 100px;
    }
}

@media screen and (max-width: 380px){
    .image_head_content{
        border-bottom: 80px solid #0a3622;
        border-right: 80px solid transparent;
    }

    .image_head_image{
        height: 80px;
        width: 50%;
    }

    .image_head_image img{
        height: 80px;
    }

    h2{
        font-size: 13px;
        margin: 0 auto;
        width: 250px;
    }

    .line{
        height: 1px;
    }

}
</style>
