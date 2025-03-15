<link
      rel="stylesheet"
      type="text/css"
      href="https://unpkg.com/select2@4.0.3/dist/css/select2.min.css"
    />
<template>
<div class="container">
    <div class="card">
        <div class="header">
            Nuevo Ingreso
        </div>
        <div class="card-body">
<form class="row g-3" >
  <div class="col-4">
    <label for="selEstudiante" class="form-label">Nombre(s)</label>
    <select class="form-control" name="selEstudiante" id="selEstudiante">
        <option value="*">Seleccione Estudiante</option>
        <option value="1">Jorge Sarabia</option>
    </select>
  </div>
    <div class="col-4">
    <label for="selEstudiante" class="form-label">Certificado(s)</label>
    <select class="form-control" name="selEstudiante" id="selEstudiante">
        <option value="*">Seleccione Certificado</option>
        <option value="1">Ingles</option>
    </select>
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
            ingreso:{}
        }
    },
    methods:{
        agregarIngreso(){

        }
    }

}
</script>
<style>

</style>