<template>
  <div id="app"> 
      <div style="text-align: center;">
        <div class="container" style="text-align: center; font-size: 18px; color: black">
            Disponibilidad de Cursos del Docente:  {{ wdocente }}
        </div>
        <span v-if="!sw_cambio">
          <div style="text-align: center;">
            <h3 id="mensaje">{{ mensajeDefault }}</h3>
          </div>
        </span>      
      </div>
      <span v-if="sw_cambio">      
        <app-grupo @changeGrupo="changeGrupo" :grupos="grupos"></app-grupo>
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
  import Grupo from './DCursoGrupo.vue';
  import Registration from './DCursoRegistration.vue';
  import Registrations from './DCursoRegistrations.vue';

  export default {
      mounted() {
          console.log('Dcurso-component mounted.');
          this.getData();
      },
      props: ['docente_id', 'facultad_id', 'sede_id', 'sw_cambio', 'wdocente'],

      components: {
          appGrupo: Grupo,
          appRegistration: Registration,
          appRegistrations: Registrations
      },

      data() {
          return {
              URLdomain: window.location.host,
              protocol: window.location.protocol,
              items:[],
              grupos:[],
              grupo_id:0,
              
              registrations: [],
              mensajeDefault: "La fecha límite de modificación ha expirado. Si necesita modificar su disponibilidad comuníquese con la dirección académica.",
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
                      'docente_id': this.docente_id,
                  };

              var url = this.protocol+'//'+this.URLdomain+'/api/dcurso/load/'
              axios.post(url, request).then(response=>{
                  this.grupos = response.data.data.grupos;
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
              var url = this.protocol+'//'+this.URLdomain+'/api/dcurso/update'
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