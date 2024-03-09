<script>
export default {
    name: "SiteGlassImage"
}
</script>

<template>
    <div class="main_glass">
        <div class="text_head">
            <h2>
                Ашгабад шахер Арассалайыш, абаданлашдырыш <br /> бирлешигинин алып барйан ишлери
            </h2>
            <div class="line"></div>
        </div>
        <div class="image_head">
            <div class="image_head_content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate deleniti dolores doloribus ex, id molestiae nostrum officiis omnis pariatur quibusdam quod rem repellendus similique velit? Aliquam at culpa, debitis est eveniet incidunt, iusto labore libero maiores omnis perferendis quibusdam, quis repellat repellendus ullam! Aspernatur cupiditate deleniti doloremque ex fugit ipsa minima, numquam odio optio quaerat sit ullam vitae! Ad alias eius labore odit ut. Adipisci aperiam at debitis eaque eligendi eos est eum labore modi pariatur quam qui, voluptas?
                </p>
            </div>
            <div class="image_head_image fx_shine_hover">
                <div class="shine"></div>
                <div>
                    <img src="/image/5.jpg" alt="Not found image">
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.main_glass{
    display: flex;
    width: 100%;
    flex-direction: column;
}


.text_head{
    font: 1.2vw Montserrat;
    align-items: center;
    text-align: center;
    font-weight: 600;
    margin-bottom: 50px;
}

h2{
    margin-bottom: 20px;
}

.line{
    width: 230px;
    height: 5px;
    background: #997404;
    margin: 0 auto;
}

.image_head{
    display: flex;
    justify-content: flex-end;
}

.image_head_content{
    position: absolute;
    left: 0;
    z-index: 3;
    border-bottom: 350px solid #0a3622;
    border-right: 350px solid transparent;
    height: 0;
    width: 50%;
    font: 1vw/1vw Montserrat;
    color: white;
    text-align: left;
    line-height: 1.8;
    font-weight: 600;
}

.image_head_image{
    height: 350px;
    width: 50%;
}


.image_head_image img{
    width: 100%;
    height: 100%;
}

p{
    padding-top: 40px;
    padding-left: 20px;
}

.fx_shine_hover {
    position: relative;
    overflow: hidden;
    z-index: 1;
}



.fx_shine_hover .shine {
    position: absolute;
    top: 0;
    left: -180%;
    width: 200%;
    height: 100%;
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);

}

.fx_shine_hover:hover .shine{
    animation-name: shine-animation;
    animation-duration: 2s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

@keyframes shine-animation {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(100%);
    }
}


@media screen and (max-width: 1250px){
    .image_head_content{
        border-bottom: 250px solid #0a3622;
    }


    .image_head_image{
        height: 250px;
        width: 50%;
    }
}

@media screen and (max-width: 900px){
    .image_head_content{
        border-bottom: 200px solid #0a3622;
        border-right: 200px solid transparent;
    }


    .image_head_image{
        height: 200px;
        width: 50%;
    }
}

@media screen and (max-width: 750px){
    .image_head_content{
        border-bottom: 150px solid #0a3622;
        border-right: 150px solid transparent;
    }

    .image_head_image{
        height: 150px;
        width: 50%;
    }
}

@media screen and (max-width: 600px){
    .image_head_content{
        border-bottom: 100px solid #0a3622;
        border-right: 100px solid transparent;
    }

    .image_head_image{
        height: 100px;
        width: 50%;
    }

    p{
        padding-top: 20px;
        padding-left: 20px;
    }
}

@media screen and (max-width: 380px){
    .image_head_content{
        border-bottom: 80px solid #0a3622;
        border-right: 80px solid transparent;
    }

    .image_head_image{
        height: 80px;
        width: 50%;
    }

}
</style>
