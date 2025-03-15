<template>
<div class="container">
    <div class="card">
        <div class="header">
            Nuevo Empleado
        </div>
        <div class="card-body">
<form class="row g-3" v-on:submit.prevent="agregarAlumno">
  <div class="col-4">
    <label for="inpNombre" class="form-label">Nombre(s)</label>
    <input type="text" class="form-control" v-model="estudiante.nombre" id="inpNombre" aria-describedby="nombreHelp">
  </div>
  <div class="col-4">
    <label for="inpApePat" class="form-label">Apellido Paterno</label>
    <input type="text" class="form-control" v-model="estudiante.apepaterno" id="inpApePat" aria-describedby="ApePatHelp">
  </div>
  <div class="col-4">
    <label for="inpApePat" class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" v-model="estudiante.apematerno" id="inpApePat" aria-describedby="ApePatHelp">
  </div>
  <div class="col-8">
    <label for="inpDir" class="form-label">Direccion</label>
    <input type="text" class="form-control" v-model="estudiante.direccion" id="inpDir" aria-describedby="DirHelp">
  </div>
    <div class="col-4">
    <label for="inpDir" class="form-label">Telefono</label>
    <input type="text" class="form-control" v-model="estudiante.telefono" id="inpDir" aria-describedby="DirHelp">
  </div>
  <div class="row">
      <div class="col-6">
        <button type="submit" class="w-100 btn btn-outline-danger">Cancelar</button>
      </div>
      <div class="col-6">
          <button type="submit" class="btn w-100 btn-success">Registrar</button>

      </div>
  </div>
</form>

        </div>
    </div>
</div>
</template>
<script>

export default {
    data(){
        return{
            estudiante:{}
        }
    },
    methods:{
        agregarAlumno(){
            console.log(this.estudiante);
            var data = {nombre:this.estudiante.nombre,apepaterno:this.estudiante.apepaterno,apematerno:this.estudiante.apematerno, direccion:this.estudiante.direccion,telefono:this.estudiante.telefono}
            console.log(JSON.stringify(data))
            console.log(data)
            fetch('estudiante', {
                method:'POST',
                body:{Nombre:this.estudiante.nombre,apepaterno:this.estudiante.apepaterno,apematerno:this.estudiante.apematerno, direccion:this.estudiante.direccion,telefono:this.estudiante.telefono}
                //body:JSON.stringify(data)
                })
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta=>{
                console.log(datosRespuesta);
                //window.location.href="alumno";
            }))
        }
    }
}
</script>
<style>

</style>