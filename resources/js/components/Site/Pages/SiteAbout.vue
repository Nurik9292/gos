<script>
import SiteHeader from "../Layouts/SiteHeader.vue";
import SiteFooter from "../Layouts/SiteFooter.vue";
import AboutContentWrapper from "./parts/AboutContentWrapper.vue";

export default {
    name: "SiteAbout",
    components: {AboutContentWrapper, SiteFooter, SiteHeader}
}
</script>

<template>
    <div class="banner">
        <img src="image/5.jpg" alt="Изображение баннера">
    </div>
    <section>
        <div class="text_head">
            <h2>Aşgabat şäher Arassalaýyş, abadanlaşdyryş birleşiginiň alyp barýan  işleri</h2>
            <div class="line"></div>
        </div>
        <div class="text_content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A culpa cupiditate deleniti distinctio dolores earum excepturi, incidunt itaque labore laboriosam maxime, nesciunt nihil officia perspiciatis placeat praesentium quas quis quo reiciendis reprehenderit repudiandae saepe sit sunt, totam veritatis voluptas voluptatum. A ab aut commodi dignissimos dolor eius enim error esse, facere illo laborum libero pariatur perspiciatis provident quis repellendus repudiandae rerum soluta ullam unde ut veniam, vero voluptate. Ab, accusamus, accusantium asperiores at dolor dolore doloremque dolorum est et harum minus nesciunt optio quia saepe, sapiente totam unde voluptas voluptatibus! Accusantium aspernatur cum fuga impedit magnam maiores quae quisquam rem.</p>
        </div>
    </section>
    <AboutContentWrapper></AboutContentWrapper>
</template>

<style scoped>
.banner {
    width: 100%;
    height: 750px;
    background-color: #333;
    margin-top: 40px;
    color: #fff;
    overflow: hidden;
    margin-bottom: 40px;
}
.banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

section{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 40px;
}

.text_head{
    font: 1.8vw Montserrat;
    align-items: center;
    text-align: center;
    font-weight: 600;
    margin-bottom: 100px;
}

h2{
    margin-bottom: 10px;
}

.line{
    width: 280px;
    height: 5px;
    background: #997404;
    margin: 0 auto;
}

.text_content{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 70%;
}

.text_content > p{
    font: 1vw Montserrat;
    line-height: 1.3;
}
</style>
