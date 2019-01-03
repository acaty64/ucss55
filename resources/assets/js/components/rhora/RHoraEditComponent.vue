<template>
<div>
  <div class="panel-body">      
    <span class="container-fluid">
      <p id="mensaje">{{ mensaje }}</p>
    </span>
    <div v-if="sw_modificado" style="text-align: center">
        <button @click="save">Grabar modificaciones</button>
    </div>
    <div style="text-align: center">
      Filtro: <input type="text" v-model="search"><button @click="filtro()" class="btn btn-success" data-toggle="tooltip" title="Mínimo"><span class="glyphicon glyphicon-search" aria-hidden='true' id='filter'></span></button>
    </div>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-condensed table-hover">
      <thead>
        <th>#</th>
        <!-- <th>id</th> -->
        <th>Docente</th>
        <th colspan="3">Requerimiento</th>
      </thead>
      <tbody>
        <tr v-for="user in users">
          <!-- <span v-if="filtro(user)">           -->
            <td>{{ user.row }}</td>
            <!-- <td>{{ user.id }}</td> -->
            <td>{{ user.wdocente }}</td>
            <td>
              <span style="text-align: center">              
                <button @click="minimun(user)" class="btn btn-danger" data-toggle="tooltip" title="Mínimo"><span class="glyphicon glyphicon-backward" aria-hidden='true' id='minimun'></span></button>
                <button @click="minus(user)" class="btn btn-danger" data-toggle="tooltip" title="Menos 2 horas"><span class="glyphicon glyphicon-minus-sign" aria-hidden='true' id='minus'></span></button>
              </span>
            </td>
            <td style="text-align: center">
              <!-- <input type="" v-model="user.rhoras"> -->
              {{ user.rhoras }}
            </td>
            <td>
              <span style="text-align: center">              
                <button @click="plus(user)" class="btn btn-success" data-toggle="tooltip" title="Más 2 horas"><span class="glyphicon glyphicon-plus-sign" aria-hidden='true' id='plus'></span></button>
                <button @click="maximun(user)" class="btn btn-success" data-toggle="tooltip" title="Máximo"><span class="glyphicon glyphicon-forward" aria-hidden='true' id='maximun'></span></button>
              </span>
            </td>
          <!-- </span> -->
        </tr>
      </tbody>
    </table>
    <nav>
      <ul class="pagination" name="pagination">
        <li v-if="pagination.current_page > 1">     
          <a href="#" @click.prevent="changePage(pagination.current_page - 1)">   
          <span>Atrás</span>  
          </a>    
        </li>     
        <li  v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : ''  ]" >     
          <a href="#" @click.prevent="changePage( page )">    
                {{ page }} 
          </a>    
        </li>     
        <li v-if="pagination.current_page < pagination.last_page">
          <a href="#" @click.prevent="changePage(pagination.current_page + 1)">   
            <span>Siguiente</span>  
          </a>    
        </li>     
      </ul>
    </nav>    
  </div>
</div>
</template>

<script>
  export default {
    mounted() {
      console.log('RHoraComponent mounted.');
      this.getData();
      this.count();
    },
    props: ['data', 'data_pages', 'facultad_id', 'sede_id'],
    data(){
      return {
        mensaje: "",
        users: [],
        allData: [],
        nPage: 1,
        offset: 4,
        pagination: [],
        sw_modificado: false,
        search: "", 
        data_work: [], 
      }
    },
    methods:{
      changePage(nPage) {
        this.pagination.current_page = nPage;
        this.getDataPage(nPage);
        this.$emit('setNpage' , nPage);
      },  
      user2all: function(user){
        var row = this.allData.filter(function (item) {
          return item.id == user.id;
        });
        row.rhoras = user.rhoras;
      },
      count: function () {
        var q_users = this.allData.filter(function(user) {
          return user.rhoras > 0;
        });
        this.mensaje = "Cantidad de usuarios con requerimiento: " + q_users.length;
        this.chk_modify();
      },
      chk_modify: function () {
        this.sw_modificado = false;
        var data = Object.values(this.data);
        for (var i = data.length - 1; i >= 0; i--) {
          if(this.allData[i]['rhoras'] > 0){
            this.sw_modificado = true;
          }
        }
      },
      minimun: function (user) {
        user.rhoras = 0;
        this.count();
        this.$forceUpdate();
      },
      minus: function (user) {
        if(user.rhoras > 0){
          var newHoras = user.rhoras - 2;
          user.rhoras = newHoras;
        }
        this.count();
        this.$forceUpdate();
      },
      plus: function (user) {
        if(user.rhoras < 30 ){
          var newHoras = user.rhoras + 2; 
          user.rhoras = newHoras;
          this.user2all(user);
        }
        this.count();
        this.$forceUpdate();
      },
      maximun: function (user) {
        user.rhoras = 30;
        this.count();
        this.$forceUpdate();
      },
      getData: function () {
        this.allData = Object.values(this.data);
        this.pagination = this.data_pages;
        this.data_work = this.allData;
        this.getDataPage(1);
      },
      getDataPage: function (nPage) {
        this.pagination.current_page = nPage;
        this.pagination.from = ((nPage-1)*this.pagination.per_page)+1;
        if(nPage < this.pagination.last_page){
          this.pagination.to = nPage*this.pagination.per_page;
        }else{
          this.pagination.to = this.pagination.total;
        }
        this.users = this.data_work.filter(function(user) { 
            return user.nPage == nPage;
          });
        this.users = this.users.sort(function(a,b){
          if( a['wdocente'] > b['wdocente']){
              return 1;
          }else if( a['wdocente'] < b['wdocente'] ){
              return -1;
          }
          return 0;
        });
      },
      save: function () {
        var rhoras = this.allData.filter(function (user) {
          return user.rhoras > 0;
        });
        var request = {
              'rhoras': rhoras,
              'facultad_id': this.facultad_id,
              'sede_id': this.sede_id,
          };
        var URLdomain = window.location.host;
        var protocol = window.location.protocol;
        var url = protocol+'//'+URLdomain+'/api/rhoras/save';
        axios.post(url, request).then(response=>{
            this.mensaje = "Registros grabados: "+response.data.contador;
            url = protocol+'//'+URLdomain+'/administrador/rhora/index';
            window.location.href = url;
        }).catch(function (error) {
            // this.mensaje = "Registros NO grabados. Error(RhoraComponent.vue)"
            console.log(error);
        });
      },
      filtro(){
        var cadena = this.search;
        if(cadena == ""){
          this.data_work = this.allData;
        }else{        
          this.data_work = this.allData.filter(function(user) {        
            var nn = user.wdocente.toUpperCase().indexOf(cadena.toUpperCase()); 
            if( nn > -1 ){
              return true;
            }else{
              return false;
            }
          });
        }
        this.rePage();
        this.changePage(1);
      },
      rePage(){
        this.data_work = this.data_work.sort(function (a,b){
          if( a['wdocente'] > b['wdocente']){
              return 1;
          }else if( a['wdocente'] < b['wdocente'] ){
              return -1;
          }
          return 0;          
        });
        var row = 0;
        var rowPage = 0;
        var nPage = 1;
        this.pagination.total = this.data_work.length;
        for (var i = 0; i <= this.pagination.total-1; i++) {
// console.log(this.data_work[i]);
          this.data_work[i].row = ++row;
          this.data_work[i].rowPage = ++rowPage;
          if(rowPage == this.pagination.per_page){
            rowPage = 0;
            ++nPage;
          }
          this.data_work[i].nPage = nPage;
        }
        this.pagination.last_page = nPage;
      },
    },
    computed: { 

      /* COMPUTED for pagination INIT */
      isActived : function() {    
        return this.pagination.current_page;    
      },      
      pagesNumber : function() {    
        if( !this.pagination.to ) {   
          return [];  
        }   
            
        var from = this.pagination.current_page - this.offset ;   
        if( from < 1 ){   
          from = 1 ;  
        }   
            
        var to = from + ( this.offset * 2 );    
        if( to >= this.pagination.last_page ){    
          to = this.pagination.last_page; 
        }   
            
        var pagesArray = [];    
        while( from <= to ) {   
          pagesArray.push( from );  
          from++; 
        }   
            
        return pagesArray;    
              
      },      
      /* COMPUTED for pagination END */
    }, 
  }
</script>
<style>
  th{
    text-align: center;
  }
  #mensaje {
    color: white;
    background-color: DodgerBlue;
    text-align: center
  }

</style>