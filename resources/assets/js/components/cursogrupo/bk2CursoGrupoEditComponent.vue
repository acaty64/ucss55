<template>
  <div id="app"> 
      <div style="text-align: center;">
        <div class="container" style="text-align: center; font-size: 18px; color: black">
            Cursos del Grupo:  {{ grupo.wgrupo }}
        </div>
        <span v-if="!sw_cambio">
          <div style="text-align: center;">
            <h3 id="mensaje">{{ mensaje }}</h3>
          </div>
        </span>      
      </div>
      <span v-if="sw_cambio">      
        <!-- <app-grupo @changeGrupo="changeGrupo" :grupos="grupos"></app-grupo> -->
        <app-registration 
          @itemRegistered="itemRegistered" 
          :items="unregisteredItems"
          :URLdomain="URLdomain"
          :protocol="protocol"
          ></app-registration>
      </span>
      <app-registrations 
        @itemUnregistered="itemUnregistered" 
        @save="save" 
        :registrations="registrations"
        :sw_cambio="sw_cambio"></app-registrations>
  </div>
</template>

<script>
  import axios from 'axios'
  // import Grupo from './CursoGrupo.vue';
  import Registration from './CursoGrupoRegistration.vue';
  import Registrations from './CursoGrupoRegistrations.vue';

  export default {
      mounted() {
          console.log('CursoGrupo-component mounted.');
          this.getData();
      },
      props: ['grupo_id', 'facultad_id', 'sede_id'],

      components: {
          // appGrupo: Grupo,
          appRegistration: Registration,
          appRegistrations: Registrations
      },

      data() {
          return {
              URLdomain: window.location.host,
              protocol: window.location.protocol,
              items:[],
              grupo:[],
              // grupos:[],
              // grupo_id:0,
              sw_cambio: true,
              registrations: [],
              mensaje: "",
          }
      },
      computed: {
          unregisteredItems() {
              return this.items.filter((item) => {
                  return !item.registered && item.grupo_id == this.grupo_id;
              });
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
console.log(response.data.data);
                  this.grupo = response.data.data.grupo;
                  this.items = response.data.data.registration;
                  this.sortWcurso(this.items);
                  this.registrations = response.data.data.registrations;
              });
          },

          save() {
              var request = {
                  'facultad_id': this.facultad_id,
                  'sede_id': this.sede_id,
                  'docente_id': this.docente_id,
                  'items': this.registrations
                };
              var url = this.protocol+'//'+this.URLdomain+'/api/cursogrupo/update'
              axios.post(url, request).then(response=>{
                console.log('response', response);                
                alert("Cursos seleccionados grabados.");
              }).catch(error => {
                console.log(error);
                alert("Los cursos seleccionados no han sido grabados.");
              });
          },

          itemRegistered(item) {
console.log("itemRegistered: ", item );
              this.registrations.push({
                  grupo_id: item.grupo_id, 
                  curso_id: item.curso_id, 
                  wcurso: item.wcurso })
              this.sortWcurso(this.registrations);
              this.items.splice(this.items.indexOf(item), 1);
          },

          itemUnregistered(registration) {
console.log("itemUnRegistered: ", registration );
            const item = this.items.find(item => {
                return item.id == registration.itemId;
            });
            item.registered = false;
            this.registrations.splice(this.registrations.indexOf(registration), 1);
            this.items.push(registration);
            this.sortWcurso(this.items);
          },

          changeGrupo(item){
            this.grupo_id = item.grupo_id;
          },

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
          }
      },
      
  }
</script>