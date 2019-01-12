import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
	state:{
    URLdomain: window.location.host,
    protocol: window.location.protocol,
    facultad_id:"",
    sede_id:"",
    items:[],
    sw_cambio: false,
    grupo:[],
    registros: [],
    registrados: [],
    mensaje: "",
    allData: [],
    search:""
	},

	mutations:{
    sortByWcurso(state){
// var pre = state.registros;
// console.log('sortByWcurso 0: ', pre);
// console.log('state.registros [0]: ', state.registros[0].wcurso);
      // state.registros.sort(function (a, b) {
      //           return (a.wcurso > b.wcurso);
      //       });
      // state.registrados.sort(function (a, b) {
      //           return (a.wcurso > b.wcurso);
      //       });
// console.log('sortByWcurso 1: ', state.registros);
      
       state.items = state.items.sort((a,b)=> (a.wcurso > b.wcurso) ? 1 : ((b.wcurso > a.wcurso) ? -1 : 0));
       state.registrados = state.registrados.sort((a,b)=> (a.wcurso > b.wcurso) ? 1 : ((b.wcurso > a.wcurso) ? -1 : 0));
      // objs.sort((a,b) => (a.last_nom > b.last_nom) ? 1 : ((b.last_nom > a.last_nom) ? -1 : 0));
    },
    registrar(state, item){
      state.registrados.push(item);
    },
    eliminar(state, item){
      state.registrados = state.registrados.filter((i)=>i.cod_curso != item.cod_curso);
    },
    setData(state){
      var data_work = state.registros;
      for (var i = 0; i <= state.registrados.length - 1; i++) {
        var valor = state.registrados[i].cod_curso;
        data_work = data_work.filter((j) => 
            j.cod_curso != valor
          ); 
      }
      state.allData = data_work;
    },
    setSearch(state, value){
      state.search = value;
    },
    filtro(state){ 
      var cadena = state.search;
      if(cadena == ""){
        var data_work = state.allData;
      }else{        
        var data_work = state.allData.filter(function(curso) {        
          var nn = curso.wcurso.toUpperCase().indexOf(cadena.toUpperCase()); 
          if( nn > -1 ){
            return true;
          }else{
            return false;
          }
        });
      }
      state.items = data_work;
    },
    setSw_cambio(state){
      state.sw_cambio = true;
    },
    setFacultad_id(state, value){
      state.facultad_id = value;
    },
    setSede_id(state, value){
      state.sede_id = value;
    },
    setGrupo_id(state, value){
      state.grupo_id = value;
    },
    setGrupo(state, value){
      state.grupo = value;
    },
    setRegistros(state, value){
      state.registros = value;
    },
    setRegistrados(state, value){
      state.registrados = value;
    },
	},

	getters: {

  },

  actions: {
    Registrar:(context, item) => {
      context.commit('registrar', item);
      context.commit('setSw_cambio');
      context.commit('sortByWcurso');
    },
    Eliminar:(context, item) => {
      context.commit('eliminar', item);
      context.commit('setSw_cambio');
      context.commit('sortByWcurso');
    },
    SetData:(context) => {
      context.commit('setData');
      context.commit('sortByWcurso');
    },
    Filtro:(context) => {
      context.commit('filtro');
    },
    SetSearch:(context, value) => {
      context.commit('setSearch', value);
    },
    Load:(context) => {
      var request = {
              'facultad_id': context.state.facultad_id,
              'sede_id': context.state.sede_id,
              'grupo_id': context.state.grupo_id,
          };
      var url = context.state.protocol+'//'+context.state.URLdomain+'/api/cursogrupo/load/'
      axios.post(url, request).then(response=>{
          context.commit('setGrupo', response.data.data.grupo);
          context.commit('setRegistros', response.data.data.cursos);
          context.commit('setRegistrados', response.data.data.cursogrupo);
          context.commit('setData');
          context.commit('filtro');
          context.commit('sortByWcurso');

          return true;
      });      
    },
    Grabar:(context) => {

    },
  },
});

function findByTipo(items, tipo) {
    for (var i in items) {
      if (items[i].tipo == tipo) {
        return i;
      }
    }
    return null;
  }

function findByRow(lineas, row, id) {
    for (var i in lineas) {
      if (lineas[i].row == row && lineas[i].id == id) {
          return i;
      }
    }
    return null;
  }

