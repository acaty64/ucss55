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
	 			<tr v-for="user in users">
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
  			mensaje: "Marque o desmarque los registros."
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
//console.log('request: ',request);
        var URLdomain = window.location.host;
        var protocol = window.location.protocol;
        var url = protocol+'//'+URLdomain+'/api/envio/load/';
        axios.post(url, request).then(response=>{
// console.log('response.data: ',response.data);
            this.users = response.data.users;
            this.checked = response.data.checked;
        }).catch(function (error) {
            console.log(error);
        });
			},
			markall(){
				var array = [];
// console.log('this.checked: ', this.checked);
				this.users.forEach(function(user) {
// console.log('user.user_id: ', user.user_id);
				  array.push(user.user_id);
				});
				this.checked = array;
			},
			unmarkall(){
				this.checked = [];
			},
			save(){
				// alert('En construccion save()');
        var request = {
              'id': this.id,
              'checked': this.checked
          };
        var URLdomain = window.location.host;
        var protocol = window.location.protocol;
        var url = protocol+'//'+URLdomain+'/api/envio/save/';
        axios.post(url, request).then(response=>{
console.log('response.data: ',response.data);
// 						alert('Docentes seleccionados: ' + response.data);
						this.mensaje = "Registros grabados: "+response.data.contador;
        }).catch(function (error) {
            console.log(error);
        });
			},
			back(){
				alert('En construccion back()');
			},
			// checked(){
			// 	alert('checked');
			// },
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