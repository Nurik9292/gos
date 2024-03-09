<script>
import AboutContentLeft from "./AboutContentLeft.vue";
import AboutContentRight from "./AboutContentRigth.vue";

export default {
    name: "AboutContentWrapper",
    components: {AboutContentRight, AboutContentLeft}
}
</script>

<template>
<section>
    <div class="heading-wrapper">
        <h2>Biziň bölümi</h2>
        <div class="line"></div>
    </div>
    <div class="content-wrapper">
        <AboutContentLeft id="content_left"></AboutContentLeft>
        <AboutContentRight id="content_right"></AboutContentRight>
        <AboutContentLeft id="content_left"></AboutContentLeft>
        <AboutContentRight id="content_right"></AboutContentRight>
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
