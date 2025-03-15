<template>
<!--<div>
<div id="nav">
    <router-link to="/inicio">Inicio</router-link>
    <router-link to="/alumno">Alumnos</router-link>
    <router-link to="/categorias">Categorias</router-link>
    <router-link to="/certificacion">Certificaciones</router-link>
    <router-link to="/ingreso">Nuevo Ingreso</router-link>
    <router-link to="/seguimiento">Seguimiento</router-link>
</div>
<br>
<div class="container">
      <main>
          <router-view></router-view>
      </main>
</div>
</div>-->
  <div>
  <div>
      <header class="w-100">
          <nav style="background: #245a70;">
              <ul style="display: inline-flex; text-decoration: none;">
                  <li ><router-link to="/inicio">Inicio</router-link></li>
                  <li ><router-link to="/alumno">Alumnos</router-link></li>
                  <li ><router-link to="/categorias">Categorias</router-link></li>
                  <li ><router-link to="/certificacion">Certificaciones</router-link></li>
                  <li ><router-link to="/ingreso">Nuevo Ingreso</router-link></li>
                  <li ><router-link to="/seguimiento">Seguimiento</router-link></li>
              </ul>
          </nav>
      </header>
  </div>
    <div class="container-fluid">
      <main>
          <router-view></router-view>
      </main>
      </div>
      </div>
</template>
<style scoped>
    a{
        text-decoration: none;
        text-transform: uppercase;
        color: white;
    }
    li{
        padding: 0.5em;
    }
</style>
<script>
export default {
  data: () => ({

  }),
};
</script>