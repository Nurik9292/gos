import './bootstrap';

import 'reset-css';
import 'normalize.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';
import 'swiper/css/free-mode';
import 'swiper/css/thumbs';


import ru from './locale/ru.json';
import en from './locale/en.json';
import tm from './locale/tm.json';

import { FontAwesomeIcon, FontAwesomeLayers} from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faWheatAwn, faScrewdriverWrench, faMagnifyingGlass, faHandHoldingDroplet, faArrowRight, faArrowLeft} from '@fortawesome/free-solid-svg-icons';

import router from "./router";
import store from './store';

import App from './App.vue';
import { createApp } from 'vue';
import { createI18n } from 'vue-i18n';

const messages = {
    ru,
    en,
    tm
};

const i18n = createI18n({
    locale: 'ru',
    messages
});

const app = createApp({});
const admin = createApp({});

library.add(faWheatAwn, faScrewdriverWrench, faMagnifyingGlass, faHandHoldingDroplet, faArrowRight, faArrowLeft);

app.component('App', App);
app.component('icon', FontAwesomeIcon);
app.component('icon-layers', FontAwesomeLayers);


app.use(i18n).use(store).use(router);
app.mount('#app');


