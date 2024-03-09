<script>

import SiteCarousel from "./SiteCarousel.vue";

export default {
    name: "CarouselWrapper",
    components: {SiteCarousel},


}
</script>

<template>
    <div id="carus">
        <div class="text_head">
            <h2>Галерея</h2>
            <div class="line"></div>
        </div>
        <SiteCarousel></SiteCarousel>
    </div>
</template>

<style scoped>
    #carus{
        height: 500px;
    }


    .line{
        width: 150px;
        height: 5px;
        background: #997404;
        margin: 0 auto;
    }

    .text_head{
        font: 1.2em Montserrat;
        align-items: center;
        text-align: center;
        font-weight: 600;
        margin-bottom: 50px;
    }

</style>
