import './bootstrap';
import { createApp } from 'vue';
import App from './Components/App.vue';
import router from './router';
//import { BootstrapVue } from 'bootstrap-vue';
//import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
const app = createApp(App);
//alert(`Vue version : ${app.version}`);
app.use(router);
app.mount('#app');
//app.use(BootstrapVue);

/*app.methods({
    getAlumno(){
        console.log("0 alumnos");
    }
});*/
