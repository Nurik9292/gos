<script>
export default {
    name: "AboutContentLeft"
}
</script>

<template>
    <div class="about_content">
        <img src="/image/gallery/gallery1.jpg" alt="not found">
        <div class="about_content_text">
            <h3>Aşgabat şäher Arassalaýyş, abadanlaşdyryş<br>birleşiginiň Şertnama bölümi</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi consectetur cupiditate dolor, eveniet fugiat ipsum, necessitatibus non perspiciatis porro quam quis quo recusandae, sequi vero! Exercitationem incidunt provident recusandae velit? A atque autem dicta doloribus ducimus, eius enim itaque laboriosam neque, officia perferendis quaerat repellat soluta, ut vitae. Adipisci.</p>
        </div>
    </div>
</template>

<style scoped>
    .about_content{
        display: flex;
        justify-content: space-between;
    }

    img{
        width: 50%;
        height: auto;
        border-radius: 50px;
        margin-right: 50px;
    }

    .about_content_text{
        width: 50%;
    }

    h3{
        font: 1.8vw Montserrat;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
    }

    p{
        font: 1.3vw Montserrat;
        line-height: 1.2;
    }

    @media screen and(max-width: 800px){


        img{
            width: 50%;
            height: 250px;
        }
    }

</style>
