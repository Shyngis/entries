import { createApp } from "vue";
import App from "./App.vue";
import router from "./router/index";
import './bootstrap';
import '../sass/app.scss'

const vueApp = createApp(App)
    .use(router)
    .mount("#entries-app");