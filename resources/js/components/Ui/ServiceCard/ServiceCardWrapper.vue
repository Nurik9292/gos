<script>

import ServiceCard from "./ServiceCard.vue";
export default {
    name: "ServiceCardWrapper",

    components:{
        ServiceCard
    },

    data(){
        return{
            contents:[
                "Вызов холодильных отходов с территории города Ашхабада",
                "Полив и мойка улиц города Ашхабада",
                "Механизм очистка пешеходной части города Ашхабада",
                "Отлов бездоммных собак и кошек, сбор отходов животноводства черте города",
                "Мониторинг работы специлизироанного транспорта, перевозящего твердые и жидкие отходы",
                "Чистота дорого и тротуаров, подземных по направлению к бульварам и улицам",
                "Размещение и замена мусорныз баков на мусопроводах",
                "Зимнее время посыпаются улицы, магистрали, стоянки, дороги песком и солью, расчщается снег",
                "Строительно-мотножные работы, проведеные ремотных работ и контроль за ходом работ",
                "Контроль за чистотой и содержанием памятников и монументов в Ашхабаде",
                "Дезинфекция полигонов ТБО",
                "Вызов мусора по договору с учереждениями и предприятиями, расположенными в черте города не имеющими возможности вывозить свой мусор",
                "Уборка листьев с улиц и тротуаров",
                "Выращивание фруктовых содов, цвтов разной окраски и внешнего вида, превращение города в сад",
            ]
        }
    }
}
</script>

<template>
    <div class="main">
        <div class="text">
            <h2>
              Наши услуги
            </h2>
            <div class="line"></div>
        </div>
        <div class="service_block">
            <ServiceCard v-for="text in contents" :text="text"></ServiceCard>

        </div>
    </div>
</template>

<style scoped>
    .main{
        width: 70%;
        height: 1300px;
        display: flex;
        flex-direction: column;
    }

    .text{
        width: 100%;
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
        width: 150px;
        height: 5px;
        background: #997404;
        margin: 0 auto;
    }

    .service_block {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }

    .service_block > * {
        width: calc(33.33% - 10px);
        margin: 5px;
    }

    @media screen and (max-width: 1500px){
        .main{
            width: 100%;
            height: 600px;
        }
    }

    @media screen and (max-width: 800px){
        .main{
            width: 100%;
        }
    }

</style>
