<template>
    <div>
        <div id="title"><h1>Listado de Alumnos </h1> <router-link to="/newalumno">Agregar <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
</svg>
</router-link></div>
        
        <table class="table table-striped" border="1">
            <thead>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Fecha de Ingreso</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Estatus</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="estudiante in estudiantes" v-bind:key="estudiante.id">
                    <td>{{estudiante.ID}}</td>
                    <td>{{estudiante.Nombre}} {{estudiante.ApePaterno}} {{estudiante.apeMaterno}}</td>
                    <td>{{estudiante.FecIngreso}}</td>
                    <td>{{estudiante.Direccion}}</td>
                    <td>{{estudiante.Telefono}}</td>
                    <td>{{estudiante.Estatus}}</td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<style scoped>

    #title h1{
        float: left;
    }
    #title a{
        float: right !important;
    }
</style>
<script>
export default {
    data(){
        return{
            estudiantes:[]
        }
    },
    created:function(){
        this.listarEstudiantes();
    },
    methods:{
        listarEstudiantes(){
            fetch('http://127.0.0.1:8000/estudiante')
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta)=>{
                console.log(datosRespuesta)
                this.estudiantes = []
                if (typeof datosRespuesta[0].success === 'undefined'){
                    this.estudiantes=datosRespuesta;
                }
            })
            .catch(console.log())
        }
    }
}
</script>
<style>

</style>