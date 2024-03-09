<script>
import SiteHeader from "../Layouts/SiteHeader.vue";
import SiteFooter from "../Layouts/SiteFooter.vue";

export default {
    name: "SiteIndex",
    components: {SiteFooter, SiteHeader}
}
</script>

<template>
    <SiteHeader></SiteHeader>
    <RouterView />
    <SiteFooter id="footer"></SiteFooter>
</template>

<style scoped>

</style>
