<script>
import {FontAwesomeIcon as Icon} from "@fortawesome/vue-fontawesome";

export default {
    name: "SiteCard",
    components: {Icon},

    props:[
        "icon",
        "content",
        "colorIcon",
        "colorFon",
        "color",
        "marginTop"
    ],
}
</script>

<template>
    <div class="cards" :style="{background: colorFon, 'margin-top': marginTop}">
        <div class="card_image" :style="{background: colorIcon, color: color}">
            <icon :icon="icon" />
        </div>
        <div class="card_text">
            {{content}}
        </div>
        <div class="pop" :style="{background: colorIcon}">

        </div>
    </div>
</template>

<style scoped>
.cards{
    width: 23%;
    height: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    line-height: 20px;
}

.card_image{
    height: 70px;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
    margin-top: 20px;
}

.card_text{
    font: 16px Arial sans-serif;
    font-weight: 500;
    display: flex;
    align-items: center;
    text-align: center;
    line-height: 1.3;
    padding: 20px;
    margin-bottom: auto;
}


.pop{
    width: 100%;
    height: 10px;
    margin-top: auto;
}
</style>
