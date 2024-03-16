<script>
export default {
    name: "ContentMain",
    props:["contents"],


    computed:{
        image(){ return this.contents.image; },
        title(){
            const local = this.$i18n.locale;

          if(this.contents.title)
            switch (local) {
                case 'tm':
                    return this.contents.title.tm;
                case 'ru':
                    return this.contents.title.ru;
                case 'en':
                    return this.contents.title.en;
                default:
                    return '';
            }
        },

        content(){
            const local = this.$i18n.locale;

            if(this.contents.content)
                switch (local) {
                    case 'tm':
                        return this.contents.content.tm;
                    case 'ru':
                        return this.contents.content.ru;
                    case 'en':
                        return this.contents.content.en;
                    default:
                        return '';
                }
        }
    }
}
</script>

<template>
    <div class="part">
        <div class="image">
            <img :src="image" alt="Not art">
        </div>
        <div class="content">
            <h1>{{title}}</h1>
            <p>{{content}}</p>
        </div>
    </div>
</template>

<style scoped>

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
