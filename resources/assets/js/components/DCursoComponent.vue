<template>
<div id="app">
  
    <app-grupo @changeGrupo="changeGrupo" :grupos="grupos"></app-grupo>
    <app-registrations 
      @itemUnregistered="itemUnregistered" 
      @save="save" 
      :registrations="registrations">
      </app-registrations>
    <app-registration @itemRegistered="itemRegistered" :items="unregisteredItems"></app-registration>

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
              facultad_id:1,
              sede_id:1,
              docente_id:4,
              grupos:[],
              grupo_id:0,
              
              registrations: [],
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
console.log('request', request);

              var url = this.protocol+'//'+this.URLdomain+'/api/dcurso/save/'

              axios.post(url, request).then(response=>{
                console.log('response', response.data.success);                
/*
                  this.grupos = response.data.data.grupos;
                  this.items = response.data.data.registration;
                  this.sortWcurso(this.items);
                  this.registrations = response.data.data.registrations;
*/
              });

            alert("Pendiente grabar información.");
console.log("save: ", this.registrations );
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