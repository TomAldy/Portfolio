import { createApp } from 'vue'
import App from './App.vue'
import store from './store';
import { RouterLink } from 'vue-router';

import BootstrapVue from 'bootstrap-vue-next'
import { faHouse, faUser, faFolder, faGraduationCap, faPaperPlane, faSun, faMoon } from '@fortawesome/pro-duotone-svg-icons'

import ScriptX from 'vue-scriptx'
import Ads from 'vue-google-adsense'
import {library} from "@fortawesome/fontawesome-svg-core";
import {faCheck} from "@fortawesome/pro-duotone-svg-icons/faCheck";

library.add(faHouse, faUser, faFolder, faGraduationCap, faPaperPlane, faSun, faMoon, faCheck);

const app = createApp(App).use(store).use(BootstrapVue).use(ScriptX).use(Ads.AutoAdsense, { adClient: 'ca-pub-1263240325581067' })
app.component('router-link', RouterLink);
app.mount('#app');
