<script>
import AboutContentLeft from "./AboutContentLeft.vue";
import AboutContentRight from "./AboutContentRigth.vue";

export default {
    name: "AboutContentWrapper",
    components: {AboutContentRight, AboutContentLeft},
    props:["contents"],

    computed:{
        contentFirst(){
            let content = [];
            if(this.contents && this.contents[0])
                content.push({
                    title: this.contents[0].title,
                    content: this.contents[0].content,
                    image: this.contents[0].image
                });

            return content[0];
        },

        contentSecond(){
            let content = [];

            if(this.contents && this.contents[0])
            content.push({
                title: this.contents[1].title,
                content: this.contents[1].content,
                image: this.contents[1].image
            });

            return content[0];
        },

        contentThird(){
            let content = [];

            if(this.contents && this.contents[0])
            content.push({
                title: this.contents[2].title,
                content: this.contents[2].content,
                image: this.contents[2].image
            });

            return content[0];
        },

        contentFourth(){
            let content = [];

            if(this.contents && this.contents[0])
            content.push({
                title: this.contents[3].title,
                content: this.contents[3].content,
                image: this.contents[3].image
            });

            return content[0];
        }
    }
}
</script>

<template>
<section>
    <div class="heading-wrapper">
        <h2>{{ $t('our-department') }}</h2>
        <div class="line"></div>
    </div>
    <div class="content-wrapper">
        <AboutContentLeft :about="contentFirst" id="content_left"></AboutContentLeft>
        <AboutContentRight :about="contentSecond" id="content_right"></AboutContentRight>
        <AboutContentLeft :about="contentThird" id="content_left"></AboutContentLeft>
        <AboutContentRight :about="contentFourth" id="content_right"></AboutContentRight>
    </div>
</section>
</template>

<style scoped>
section {
    width: 100%;
    display: flex;
    justify-content: center;
}

.heading-wrapper{
    display: flex;
    justify-content: center;
    flex-direction: column;
}



h2{
    margin-bottom: 10px;
    font: 1.8vw Montserrat;
    font-weight: 600;

}

.line{
    width: 250px;
    height: 5px;
    background: #997404;
    margin-left: 20px;
    margin-bottom: 130px;
}

.content-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 80%;
    margin: 0 auto;
}


#content_right,
#content_left {
    margin-bottom: 80px;
}

@media screen and (max-width: 2200px){
    .line{
        width: 150px;
    }
}

@media screen and (max-width: 1500px){
    .line{
        width: 100px;
        margin-left: 0;
    }
}

@media screen and (max-width: 800px){
    .line{
        width: 70px;
    }
}

</style>
