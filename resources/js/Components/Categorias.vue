<template>
    <div>
        <h1>Categorias Disponibles</h1>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha de Creacion</th>
                <th>Estatus</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="categoria in categorias" v-bind:key="categoria.id">
                    <td>{{categoria.ID}}</td>
                    <td>{{categoria.Titulo}}</td>
                    <td>{{categoria.created_at}}</td>
                    <td>{{categoria.Estatus}}</td>
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
<script>
export default {
    data(){
        return{
            categorias:[]
        }
    },
    created:function(){
        this.listarCategorias();
    },
    methods:{
        listarCategorias(){
            fetch('http://127.0.0.1:8000/categoria')
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta)=>{
                console.log(datosRespuesta)
                this.categorias = []
                if (typeof datosRespuesta[0].success === 'undefined'){
                    this.categorias=datosRespuesta;
                }
            })
            .catch(console.log())
        }
    }
}
</script>
<style>

</style>