<script>
import SiteHeader from "../Layouts/SiteHeader.vue";
import SiteFooter from "../Layouts/SiteFooter.vue";
import api from "../../../services/api.js";

export default {
    name: "SiteIndex",
    components: {SiteFooter, SiteHeader},

    data(){
        return{
            logos: [],
            footer: '',
            tel: ''
        }
    },

    mounted() {
        api.getLogos()
            .then(data => (this.logos = data.data))
            .catch(error => console.error('Error fetching banners:', error));

        api.getFooters()
            .then(data => {this.footer = data.data[0]})
            .catch(error => console.error('Error fetching banners:', error));

        api.getFooterContacts().then(res => {
            this.tel = res.data[0].tel;
        })
    },

    methods:{
        getFirstLogo(){
            let image = '';
            if(this.logos[0])
                image = this.logos[0].image
            return image;
        },
    }
}
</script>

<template>
    <SiteHeader :logos="logos" :tel="tel"></SiteHeader>
    <RouterView />
    <SiteFooter :logo="getFirstLogo()" :footer="footer" id="footer"></SiteFooter>
</template>

<style scoped>

</style>
