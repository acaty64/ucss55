<template>
    <div id="registrados" dusk="cursogruporegistrados-component">
        <div class="summary">
            <!-- <span v-if="total > 0 && sw_cambio"> -->
            <span v-if="sw_cambio" >
                <button @click="save">Grabar modificaciones</button>
            </span>
            <h3>Cursos Seleccionados</h3>
            <h5>Total: {{ total }}</h5>
        </div>
        <hr>
        <div class="row" v-for="item in registrados">
            <p>{{ item.wcurso }} ( {{ item.cod_curso }} )<button @click="unregister(item)">X</button></p>
        </div>
    </div>

</template>

<script>
  import {mapState} from 'vuex';
  export default {
    computed: {
      ...mapState({
          registrados: (state) => state.registrados,
          sw_cambio: (state) => state.sw_cambio,
      }),
      total() {
        return this.registrados.length;
      },
    },
    methods: {
      unregister(item) {
        this.$store.dispatch('Eliminar', item);
        this.$store.dispatch('SetData');
        this.$store.dispatch('Filtro');
      },
      save(){
        this.$store.dispatch('Grabar');
      }
    },
  }
</script>

<style scoped>
    #registrados {
        box-shadow: 1px 1px 2px 1px #ccc;
        margin: 20px;
        padding: 20px;
        display: inline-block;
        width: 500px;
        vertical-align: top;
        text-align: left;
    }

    .summary {
        text-align: center;
    }

    .row h4 {
        display: inline-block;
        width: 30%;
        margin: 0 0 10px 0;
        box-sizing: border-box;
    }

    .row span {
        width: 30%;
        color: red;
        cursor: pointer;
    }

    .row span:hover {
        color: darkred;
    }

</style>