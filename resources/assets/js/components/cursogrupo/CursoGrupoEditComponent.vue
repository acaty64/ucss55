<template>
  <main class="CursoGrupoEditComponent"> 
      <registros></registros>
      <registrados></registrados>
  </main>
</template>

<script>
  import {mapState} from 'vuex';
  import axios from 'axios';
  import registros from './Registros.vue';
  import registrados from './Registrados.vue';

  export default {
    props:['grupo_id', 'facultad_id', 'sede_id'],
    mounted() {
        console.log('CursoGrupo-component mounted.');
        this.$store.commit('setFacultad_id', this.facultad_id);
        this.$store.commit('setSede_id', this.sede_id);
        this.$store.commit('setGrupo_id', this.grupo_id);
        this.$store.dispatch('Load');
    },
    components: {
        registros, registrados
    },      
  }
</script>