<script>
import SiteCard from "./SiteCard.vue";
export default {
    name: "CardWrapper",

    components:{
        SiteCard
    },

    data(){
        return{
            contentFixed: "Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem"
        }
    }
}
</script>
<template>
    <div class="card_wrapper">
        <SiteCard id="site_card"
            icon="fa-solid fa-wheat-awn"
            colorFon="#14d6c6"
            colorIcon="#0a3622"
            :content="contentFixed"
            color="white"
            marginTop="-100px"
        ></SiteCard>
        <SiteCard id="site_card"
            icon="fa-solid fa-screwdriver-wrench"
            colorFon="#0a3622"
            colorIcon="#14d6c6"
            :content="contentFixed"
            color="black"
            marginTop="-60px"
        ></SiteCard>
        <SiteCard id="site_card"
            icon="fa-solid fa-magnifying-glass"
            colorFon="#0a3622"
            colorIcon="#14d6c6"
            :content="contentFixed"
            color="black"
            marginTop="-60px"
        ></SiteCard>
        <SiteCard id="site_card"
            icon="fa-solid fa-hand-holding-droplet"
            colorFon="#0a3622"
            colorIcon="#14d6c6"
            :content="contentFixed"
            color="black"
            marginTop="-60px"
        ></SiteCard>
    </div>
</template>

<style scoped>
.card_wrapper{
    width: 60%;
    height: 10px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 300px;
}

#site_card{
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}

#site_card:hover {
    transform: translateY(-30px);
}

#site_card:first-child:hover{
    transform: translateY(0);
}

@media screen and (max-width: 1500px) {
    .card_wrapper {
        flex-wrap: wrap;
    }

    .card_wrapper > * {
        width: 48%;
    }

    #site_card{
        margin-bottom: 80px;
    }

    #site_card:last-child{
        margin-bottom: 0;
    }

    #site_card:nth-child(3){
        margin-bottom: 0;
    }

}

@media screen and (max-width: 900px) {
    .card_wrapper {
        flex-wrap: nowrap;
        flex-direction: column;
        align-items: center;
    }

    .card_wrapper > * {
        width: 100%;
    }

    #site_card:nth-child(3){
        margin-bottom: 80px;
    }
}
</style>
