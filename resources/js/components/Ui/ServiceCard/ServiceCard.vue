<script>
export default {
    name: "ServiceCard",

    props:["text"]
}
</script>

<template>
    <div class="service-card">
        <img src="/image/service.jpg" alt="Not found">
        <p>{{text}}</p>
    </div>
</template>

<style scoped>
.service-card{
        display: flex;
        justify-content: space-between;
        width: 30%;
        height: 150px;
        align-items: center;
        cursor: pointer;
    }

    img{
        width: 40%;
        height: 100%;
        margin-right: 10px;
    }
    p{
        font: 0.8vw/0.8vw Montserrat;
        line-height: 1.2;
        text-align: center;
        justify-content: center;
    }

    div:hover{
        outline: 1px solid gray;
        outline-offset: 5px;
        animation: glow 0.5s ease-in-out infinite alternate;
    }

    @keyframes glow {
        from {
            outline-color: transparent;
        }
        to {
            outline-color: #997404;
        }
    }

@media screen and (max-width: 1500px) {
    .service-card {
        height: 100px;
    }
}

@media screen and (max-width: 900px) {
    .service-card {
        flex-direction: column;
        align-items: flex-start;
    }

    img {
        width: 100%;
        height: 60%;
        margin-right: 0;
        margin-bottom: 10px;
    }

    p {
        text-align: left;
    }
}
</style>
