<template>
    <div>
        <h1>Listado de Certificaciones</h1>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Costo</th>
                <th>Fecha de Creacion</th>
                <th>Estatus</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="certificado in certificados" v-bind:key="certificado.id">
                    <td>{{certificado.ID}}</td>
                    <td>{{certificado.Titulo}}</td>
                    <td>{{certificado.Costo}}</td>
                    <td>{{certificado.created_at}}</td>
                    <td>{{certificado.Estatus}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    data(){
        return{
            certificados:[]
        }
    },
    created:function(){
        this.listarCertificados();
    },
    methods:{
        listarCertificados(){
            fetch('http://127.0.0.1:8000/certificado')
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta)=>{
                console.log(datosRespuesta)
                this.certificados = []
                if (typeof datosRespuesta[0].success === 'undefined'){
                    this.certificados=datosRespuesta;
                }
            })
            .catch(console.log())
        }
    }
}
</script>
<style>

</style>