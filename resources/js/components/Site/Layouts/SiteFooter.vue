<script>
export default {
    name: "SiteFooter",
}
</script>

<template>
    <footer>
        <div class="footer_body">
            <div class="footer_content">
                <img src="/image/logo.png" alt="not fond">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam assumenda beatae dolorem est ex natus, nobis officia quia sed similique voluptas? At, delectus deserunt dolorem, eos, eum fuga itaque minima mollitia natus possimus rem sapiente tempora ullam unde vero? Aspernatur at cupiditate ducimus illum itaque laudantium magnam non tempore?</p>
            </div>
            <div class="footer_feedback">
                <div class="box_address">
                    <ul>
                        <li>
                            <p>Тел:</p>
                            <span>+99361112233</span>
                        </li>
                        <li>
                            <p>Почта:</p>
                            <span>example@gmail.com</span>
                        </li>
                        <li>
                            <p>Адрес:</p>
                            <span>Город Ашхабад</span>
                        </li>
                        <li>
                            <p>Рабочие часы:</p>
                            <span>8:00 - 23:00 пн-вс</span>
                        </li>
                    </ul>
                </div>
                <div class="box_email">
                    <h3>Обрантая связь</h3>
                    <ul>
                        <li class="nav-item mb-2">
                            <input type="tel" id="phone" name="phone" placeholder="+9961363636">
                        </li>
                        <li class="nav-item mb-2">
                            <input type="email" id="email" name="email" placeholder="example@gmail.com">
                        </li>
                        <li class="nav-item mb-2">
                            <input type="text" id="address" name="address" placeholder="горо Ашхабад ул Непесов">
                        </li>
                        <li class="nav-item mb-2">
                            <button type="submit">Отправить</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</template>

<style scoped>

footer {
    background-color: #14d6c6;
    height: auto;
    color: black;
    padding: 20px 0;
    display: flex;
    justify-items: center;
    justify-content: center;
}


.footer_body{
    width: 70%;
    display: flex;
    justify-content: space-between;

}

.footer_content{
    width: 40%;
}


img{
    width: 5em;
    height: 5em;
}

.footer_feedback{
    width: 50%;
    display: flex;
    justify-content: space-between;
    justify-items: center;
    align-items: center;
}

.footer_content > p{
    font: 1em Montserrat;
    line-height: 1.3;

}

p,
span{
    font: 0.8em sans-serif;
    line-height: 1.3;
}

.box_email{
    width: 60%;
    margin-top: 50px;
}

.box_address > ul > li{
    margin-bottom: 10px;
}

.box_email > h3,
input,
button{
    margin-bottom: 10px;
}

input {
    width: 100%;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #0a3622;
    color: #fff;
    padding: 10px 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
}



li{
    display: flex;
    justify-content: space-between;
}

@media screen and (max-width: 1500px) {
    .footer_body{
        width: 80%;
    }
}

@media screen and (max-width: 1200px) {
    .footer_body{
        width: 100%;
    }
}

@media screen and (max-width: 900px) {
    .footer_body{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }



    .footer_content,
    .footer_feedback {
        width: 100%;
        margin-bottom: 20px;
    }

    img {
        width: 4em;
        height: 4em;
    }

    .footer_content > p {
        font-size: 0.9em;
    }

    .box_address > ul > li,
    .box_email > h3,
    input,
    button {
        margin-bottom: 5px;
    }

    input,
    button {
        padding: 4px 8px;
        font-size: 0.8em;
    }
}



</style>
