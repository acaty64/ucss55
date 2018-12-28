<template>
  <div class="container">
    <div class="row">
        <div style="text-align: center;">
          <div class="container" style="text-align: center; font-size: 18px; color: black">
              Disponibilidad Horaria del Docente:  {{ wdocente }}
          </div>
        </div>
      <span v-if="sw_cambio">
        <div style="text-align: center;">
          <h3 id="mensaje">{{ mensaje }}</h3>
          <button @click="save">Grabar {{ cuenta }} franjas seleccionadas</button>
        </div>
      </span>
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>Checks: {{ cuenta }}</p>
            <table>
              <tbody>
                <tr>
                  <th>Franja</th>
                  <th v-for="dia in semana">{{ dia }}</th>
                </tr>
                <tr v-for="gfranja in gfranjas">
                  <td> 
                    <p>
                      {{ gfranja.wfranja }}
                    </p> 
                  </td>
                  <td v-for="dia in semana">
                      <span v-if="existeFranja(dia, gfranja)">
                        <span v-if="disponible(dia, gfranja)">
                          <input type="checkbox" checked @click="off(dia, gfranja)">
                        </span>
                        <span v-else>
                          <input type="checkbox" unchecked @click="on(dia, gfranja)">
                        </span>
                      </span>
                  </td>
                </tr>
              </tbody>
            </table>
              
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('DHoraComponent mounted.');
      this.getData();
    },
    props: [
            'facultad_id',
            'sede_id',
            'sw_cambio', 
            'cfranjas',  
            'gfranjas', 
            'dhoras', 
            'rhoras',
            'docente_id', 
            'wdocente',
          ],
    data(){
      return {
        item: [],
        semana:['lun', 'mar', 'mie', 'jue', 'vie', 'sab'],
        mensaje: "",
        mensajeDefault: "La fecha límite de modificación ha expirado. Si necesita modificar su disponibilidad comuníquese con la dirección académica.",
        cuenta: 0,
      }
    },
    methods:{
      getData: function () {
console.log('this.dhoras: ', this.dhoras);
        this.cuenta = this.dhoras.length;
        if(!this.sw_cambio){
          this.mensaje = this.mensajeDefault;
        }else{
          this.mensaje = "Debe seleccionar como mínimo: "+ this.rhoras/2 +" casillas.";
        };
      },
      on: function (dia, gfranja) {
        var nDia = this.semana.findIndex(function(element){return element==dia})+1;
        var franja = 'D'+nDia+'_H'+gfranja['turno']+gfranja['hora'];
        // console.log('on: ',franja);
        this.dhoras.push(franja);
        this.cuenta = this.dhoras.length;
      },
      off: function (dia, gfranja) {
        var nDia = this.semana.findIndex(function(element){return element==dia})+1;
        var franja = 'D'+nDia+'_H'+gfranja['turno']+gfranja['hora'];
        // console.log('off: ',franja);
        var index = this.dhoras.indexOf(franja);
        if(index > -1){
          this.dhoras.splice(index, 1);
          this.cuenta = this.dhoras.length;
        }
      },
      existeFranja: function (dia, gfranja) {
        // console.log('existeFranja.gfranja:', gfranja);
        var cfranjas = Object.values(this.cfranjas);
        var nDia = this.semana.findIndex(function(element){return element==dia})+1;
        var franja = 'D'+nDia+'_H'+gfranja['turno']+gfranja['hora'];
        // console.log('existeFranja.franja: ', franja);
        // console.log('existeFranja: ', cfranjas.includes(franja));
        return cfranjas.includes(franja);
      },
      disponible: function (dia, gfranja) {
        // console.log('disponible.dia:', dia);
        var nDia = this.semana.findIndex(function(element){return element==dia})+1;
        // console.log('gfranja.constructor: ',gfranja.constructor);
        var franja = 'D'+nDia+'_H'+gfranja['turno']+gfranja['hora'];
        // console.log('disponible.franja: ', franja);
        // console.log('disponible: ', this.dhoras.includes(franja));
        return this.dhoras.includes(franja);
      },
      save: function () {
        if(this.cuenta >= this.rhoras/2){
          var request = {
                'docente_id': this.docente_id,
                'facultad_id': this.facultad_id,
                'sede_id': this.sede_id,
                'checked': this.dhoras
            };
          var URLdomain = window.location.host;
          var protocol = window.location.protocol;
          var url = protocol+'//'+URLdomain+'/api/dhoras/save/';
          axios.post(url, request).then(response=>{
console.log(response.data);
              this.mensaje = "Registros grabados: "+response.data.contador;
          }).catch(function (error) {
              // this.mensaje = "Registros NO grabados. Error(EnvioComponent.vue)"
              console.log(error);
          });
        }else{
          this.mensaje = "Debe seleccionar " + this.rhoras/2 + " casillas como mínimo.";
        }

      },
    },
  }
</script>
<style>
  th{
    width: 17%;
  },
  #mensaje {
    color: white;
    background-color: DodgerBlue;
    text-align: center
  }

</style>