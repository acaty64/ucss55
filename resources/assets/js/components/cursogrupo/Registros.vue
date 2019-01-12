<template>
  <div id="registros" dusk="registros-component">
    <h3>Seleccione el curso</h3>
    <hr>
    <div class="row">
      Filtro: <input type="text" v-model="search"><button @click="filtro()" class="btn btn-success" data-toggle="tooltip" title="Filtro"><span class="glyphicon glyphicon-search" aria-hidden='true' id='filter'></span></button>
    </div>
    <div class="row">    
      <span v-for="item in items">
        <div>
          <button @click="registrar(item)">
            {{ item.wcurso }} ( {{ item.cod_curso }} )
          </button>
        </div>
      </span> 
    </div>
  </div>
</template>
<script>
  import {mapState} from 'vuex';
  export default {
    mounted() {
      console.log('Registros.vue mounted');
      this.$store.dispatch('SetData');
      this.$store.dispatch('Filtro');
    },
    data(){
      return {
        search: "", 
        // items: [], 
        // allData: [], 
      }
    },
    computed: {
      ...mapState({
          // registros: (state) => state.registros,
          // registrados: (state) => state.registrados,
          items: (state) => state.items,
      }),
    },
    methods: {
      registrar(item){
        this.$store.dispatch('Registrar', item);
        this.$store.dispatch('SetData');
        this.$store.dispatch('Filtro');
      },
      filtro(){
        this.$store.dispatch('SetSearch', this.search);
        this.$store.dispatch('Filtro');
      },

    } 
  }
</script>

<style scoped>
    #registros {
        box-shadow: 1px 1px 2px 1px #ccc;
        margin: 20px;
        padding: 20px;
        display: inline-block;
        width: 500px;
        vertical-align: top;
    }

    .row h4 {
        display: inline-block;
        width: 70%;
        text-align: left;
        margin: 0 0 10px 0;
    }

    button {
        background-color: lightgreen;
        border: none;
        box-shadow: 1px 1px 1px black;
        font-size: inherit;
        text-align: left;
        cursor: pointer;
    }

    button:hover {
        background-color: green;
    }
</style>
