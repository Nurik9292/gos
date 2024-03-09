import './bootstrap';
import 'reset-css';
import 'normalize.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-coverflow';


import { FontAwesomeIcon, FontAwesomeLayers} from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faWheatAwn, faScrewdriverWrench, faMagnifyingGlass, faHandHoldingDroplet, faArrowRight, faArrowLeft} from '@fortawesome/free-solid-svg-icons';

import router from "./router";

import App from './App.vue';
import { createApp } from 'vue';

const app = createApp({});


library.add(faWheatAwn, faScrewdriverWrench, faMagnifyingGlass, faHandHoldingDroplet, faArrowRight, faArrowLeft);

app.component('App', App);
app.component('icon', FontAwesomeIcon);
app.component('icon-layers', FontAwesomeLayers);

app.use(router);
app.mount('#app');
