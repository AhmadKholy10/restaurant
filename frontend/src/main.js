
import { createApp } from 'vue'
import App from './App.vue'

import router from './router';

import $ from 'jquery'; // Import jQuery globally
window.jQuery = $;
window.$ = $;

createApp(App)
    .use(router)
    .mount('#app')
