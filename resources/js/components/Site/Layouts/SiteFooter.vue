<script>
import api from "../../../services/api.js";
export default {
    name: "SiteFooter",

    data(){
        return{
            address:[],
            work: [],
            tel: '',
            email: ''
        }
    },

    props: ["logo", "footer"],

    computed:{
        getContent(){
            let content;
            if(this.footer)
                content = this.footer.content.ru;
            return content;
        },

        getAddress(){
            const local = this.$i18n.locale;
            if(this.address)
                switch (local) {
                    case 'tm':
                        return this.address.tm;
                    case 'ru':
                        return this.address.ru;
                    case 'en':
                        return this.address.en;
                    default:
                        return '';
                }
        },

        getWork(){
            const local = this.$i18n.locale;
            if(this.work)
                switch (local) {
                    case 'tm':
                        return this.work.tm;
                    case 'ru':
                        return this.work.ru;
                    case 'en':
                        return this.work.en;
                    default:
                        return '';
                }
        },
    },

    mounted() {
        api.getFooterContacts().then(res => {
            console.log(res.data[0])
            this.address = res.data[0].address;
            this.work = res.data[0].work;
            this.tel = res.data[0].tel;
            this.email = res.data[0].email;
        })
    }
}
</script>

<template>
    <footer>
        <div class="footer_body">
            <div class="footer_content">
                <img :src="logo" alt="not fond">
                <p>{{getContent}}</p>
            </div>
            <div class="footer_feedback">
                <div class="box_address">
                    <ul>
                        <li>
                            <p>{{$t('tel')}}:</p>
                            <span>{{tel}}</span>
                        </li>
                        <li>
                            <p>{{ $t('email') }}:</p>
                            <span>{{email}}</span>
                        </li>
                        <li>
                            <p>{{ $t('address') }}:</p>
                            <span>{{getAddress}}</span>
                        </li>
                        <li>
                            <p>{{ $t('work-time') }}:</p>
                            <span>{{getWork}}</span>
                        </li>
                    </ul>
                </div>
                <div class="box_email">
                    <h3>{{ $t('feedback') }}</h3>
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
    background-color: #01ddb9;
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
    width: 150px;
    height: 100px;
    box-sizing: border-box;
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

.box_address{
    width: 90%;
    margin-right: 50px;
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
