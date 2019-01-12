<template>
  <div id="app"> 
      <div style="text-align: center;">
        <div class="container" style="text-align: center; font-size: 18px; color: black">
            Cursos del Grupo:  {{ grupo.wgrupo }}
        </div>
        <span v-if="!sw_cambio">
          <div style="text-align: center;">
            <h3 id="mensaje">{{ mensajeDefault }}</h3>
          </div>
        </span>
      </div>
      <span v-if="sw_cambio">
        <div style="text-align: center;">
          <h3 id="mensaje">{{ mensaje }}</h3>
          <button @click="save">Grabar {{ cuenta }} franjas seleccionadas</button>
        </div>
      </span>              
      <span v-if="sw_cambio">
        
      </span>
  </div>

</template>

<script>
  export default {
      mounted() {
          console.log('Dcurso-component mounted.');
          this.getData();
          console.log('Dcurso-component getData.');
          this.loadItems();
          console.log('Dcurso-component loadItems.');
      },
      props: ['grupo_id', 'facultad_id', 'sede_id'],

      data() {
          return {
              URLdomain: window.location.host,
              protocol: window.location.protocol,
              grupo:[],
              cursos:[],
              cursogrupo:[],
              wsearch: "",
              items:[],
              mensajeDefault: "",
              sw_cambio:false
          }
      },

      methods: {
          getData: function() {
              var request = {
                      'facultad_id': this.facultad_id,
                      'sede_id': this.sede_id,
                      'grupo_id': this.grupo_id,
                  };
              var url = this.protocol+'//'+this.URLdomain+'/api/cursogrupo/load/'
              axios.post(url, request).then(response=>{
console.log(response.data);
                  this.grupo = response.data.data.grupo;
                  this.cursos = response.data.data.cursos;
                  this.cursogrupo = response.data.data.cursogrupo;
                  return true;
              });
          },

          loadItems: function(){
console.log("this.cursos.length: ", this.cursos.length);
            for (var i = this.cursos.length - 1; i >= 0; i--) {
              var item = this.cursos[i];
              var check = this.cursogrupo.filter((i) => i.cod_curso == item.cod_curso);
console.log('check.count(): ', check.count());
              
              if(check.count() == 0){
                this.items.push(item);
              }
            }
console.log('this.items: ', this.items);
            return true;
          },

          // save() {
              // var request = {
              //     'facultad_id': this.facultad_id,
              //     'sede_id': this.sede_id,
              //     'docente_id': this.docente_id,
              //     'items': this.registrations
              //   };
              // var url = this.protocol+'//'+this.URLdomain+'/api/dcurso/update'
              // axios.post(url, request).then(response=>{
              //   console.log('response', response);                
              //   alert("Cursos seleccionados grabados.");
              // }).catch(error => {
              //   console.log(error);
              //   alert("Los cursos seleccionados no han sido grabados.");
              // });
          // },

          sortWcurso(array){
            array.sort(function (a, b) {
              if (a.wcurso > b.wcurso) {
                return 1;
              }
              if (a.wcurso < b.wcurso) {
                return -1;
              }
              // a must be equal to b
              return 0;
            });
          },
      },
      
  }
</script>