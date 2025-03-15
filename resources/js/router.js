import { createRouter, createWebHistory } from "vue-router";
import Inicio from './Components/Inicio.vue';
import Alumno from './Components/Alumno.vue'
import NotFound from './Components/NotFound.vue'
import Certificacion from './Components/Certificacion.vue'
import Ingreso from './Components/Ingreso.vue'
import Seguimiento from './Components/Seguimiento.vue'
import Categorias from './Components/Categorias.vue'
import NewAlumno from './Components/NewAlumno.vue'

const routes = [
    {path: '/Inicio', component: Inicio},
    {path: '/Alumno', component: Alumno},
    {path: '/Certificacion', component: Certificacion},
    {path: '/Ingreso', component: Ingreso},
    {path: '/Seguimiento', component: Seguimiento},
    {path: '/Categorias', component: Categorias},
    {path: '/NewAlumno', component: NewAlumno},
    {path: '/:pathMatch(.*)*', component: NotFound}
];
const history = createWebHistory();

const router  = createRouter({
    history, routes
});

export default router 