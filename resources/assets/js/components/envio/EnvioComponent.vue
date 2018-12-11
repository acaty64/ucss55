<template>
	<main class="EnvioComponent">
		<span class="container-fluid">
			<h3 id="mensaje">{{ mensaje }}</h3>
		</span>
		<table>
			<tbody>
				<tr>
					<td style="width:30%">
						<button @click="markall" class="btn btn-success" data-toggle="tooltip" title="Marcar todos"><span class="glyphicon glyphicon-check" aria-hidden='true' id='markall'> Marcar Todos</span></button>
					</td>
 					<td style="width:30%">
						<button @click="unmarkall" class="btn btn-info" data-toggle="tooltip" title="Desmarcar todos"><span class="glyphicon glyphicon-unchecked" aria-hidden='true' id='unmarkall'> Desmarcar Todos</span></button>
					</td>					
					<td style="width:30%">
						<button @click="save" class="btn btn-primary" data-toggle="tooltip" title="Grabar"><span class="glyphicon glyphicon-ok" aria-hidden='true' id='save'> Grabar cambios</span></button>
					</td>
					<td style="width:30%">
						<button @click="back" class="btn btn-success" data-toggle="tooltip" title="Regresar al índice" id='Regresar'><span class="glyphicon glyphicon-menu-right" aria-hidden='true'> Regresar al índice</span></button>
					</td>
				</tr>
			</tbody>
		</table>
		<table class="table table-striped">
	 		<thead>
	 			<th>User Id</th>
	 			<th>Código</th>
	 			<th>Docente a Comunicar</th>
	 			<th>Email principal</th>
	 			<th>Email alternativo</th>
	 			<th>Enviar</th>
	 		</thead>
	 		<tbody>
	 			<tr v-for="user in dataPage">
					<td>{{ user.user_id }}</td>
					<td>{{ user.cdocente }}</td>
					<td>{{ user.wdocente }}</td>
					<td>{{ user.email_to }}</td>
					<td>{{ user.email_cc }}</td>
					<td><input type="checkbox" v-bind:value="user.user_id" v-model="checked">
					</td>
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
	</main>	
</template>
<script>
	import axios from 'axios';
	export default
	{
		props:['id', 'facultad_id', 'sede_id', 'type_id', 'type'],
		mounted(){
			console.log('EnvioComponent mounted');
			this.getData();
		},
  	data(){
  		return {
  			users: [],
  			checked: [],
  			mensaje: "Marque o desmarque los registros.",
        /* DATA for pagination INIT */
        page:1,
        offset: 4,                 
        pagination: { 
            'total' :0, 
            'current_page'  :0, 
            'per_page'  :0, 
            'last_page' :0, 
            'from'  :0, 
            'to'  :0, 
        },
        dataPage: [],   
        /* DATA for pagination END */
  		}
  	},

		methods:{
			getData: function() {
        var request = {
              'id': this.id,
              'facultad_id': this.facultad_id,
              'sede_id': this.sede_id,
              'type_id': this.type_id
          };
        var URLdomain = window.location.host;
        var protocol = window.location.protocol;
        var url = protocol+'//'+URLdomain+'/api/envio/load/';
        axios.post(url, request).then(response=>{
            // this.users = response.data.users;
            this.users = Object.values(response.data.users);
            this.pagination = response.data.pagination;
            this.checked = response.data.checked;
            this.getDataPage(1);
        }).catch(function (error) {
            console.log(error);
        });
			},
      /* METHODS for pagination INIT */
      getDataPage: function (page) {
        this.pagination.current_page = page;
        this.pagination.from = ((page-1)*this.pagination.per_page)+1;
        if(page < this.pagination.last_page){
          this.pagination.to = page*this.pagination.per_page;
        }else{
          this.pagination.to = this.pagination.total;
        }
        this.dataPage = this.users.filter(function(user) { 
            return user.page == page;
          });
        this.dataPage = this.dataPage.sort(function(a,b){
          if( a['wdocente'] > b['wdocente']){
              return 1;
          }else if( a['wdocente'] < b['wdocente'] ){
              return -1;
          }
          return 0;
        });
      },
      changePage(page) {
        this.pagination.current_page = page;
        this.getDataPage(page);
        this.$emit('setPage' , page);
      },          
      /* METHODS for pagination END */
			markall(){
				var array = [];
				this.users.forEach(function(user) {
				  array.push(user.user_id);
				});
				this.checked = array;
			},
			unmarkall(){
				this.checked = [];
			},
			save(){
        var request = {
              'id': this.id,
              'checked': this.checked
          };
        var URLdomain = window.location.host;
        var protocol = window.location.protocol;
        var url = protocol+'//'+URLdomain+'/api/envio/save/';
        axios.post(url, request).then(response=>{
						this.mensaje = "Registros grabados: "+response.data.contador;
        }).catch(function (error) {
        		this.mensaje = "Registros NO grabados. Error(EnvioComponent.vue)"
            console.log(error);
        });
			},
			back(){
        var URLdomain = window.location.host;
        var protocol = window.location.protocol;
        var url = protocol+'//'+URLdomain+'/api/menvio/index/';
				axios.get(url).then(response=>{
						window.location = response.data.redirect;
        }).catch(function (error) {
        		this.mensaje = "No redireccionado al index."
        		alert(this.mensaje);
            console.log(error);
        });
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
	#mensaje {
		color: white;
		background-color: DodgerBlue;
		text-align: center
	}
</style>