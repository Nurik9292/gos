<script>

import SiteCarousel from "./SiteCarousel.vue";

export default {
    name: "CarouselWrapper",
    components: {SiteCarousel},
    props:["gallery"]

}
</script>

<template>
    <div id="carus">
        <div class="text_head">
            <h2>{{ $t('gallery-main') }}</h2>
            <div class="line"></div>
        </div>
        <SiteCarousel :slides="gallery"></SiteCarousel>
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
        font: 1.4vw Montserrat;
        align-items: center;
        text-align: center;
        font-weight: 600;
        margin-bottom: 50px;
    }

</style>
