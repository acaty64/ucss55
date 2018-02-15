<template>
    <div dusk="userindex-component"> 
        <div class="container">
            <span v-show="ctype == 'Administrador'">
                <a href="/administrador/user/create" class="btn btn-info">Registrar Nuevo Usuario</a>               
            </span>
        </div>     
        <br>      
        <table class="table table-striped table-condensed table-hover">
            <thead>
                <th>id</th>
                <th>Código</th>
                <th>Usuario</th>
                <th>Docente</th>
                <th>Tipo</th>
                <th>Acción</th>
            </thead>
            <tbody>  
                <tr v-for="user in users"> 
                    <td>{{ user.user_id }}</td>
                    <td>{{ user.cdocente }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.wdocente }}</td>
                    <td>{{ user.ctype }}</td>
                    <td>
                        <span v-for="button in user.buttons">
                            <a :id="button.id+user.user_id" :href="prefix()+button.href+user.user_id" :class="'btn btn-'+button.color" data-toggle="tooltip" :title=button.title ><span :class="'glyphicon glyphicon-'+button.icon" aria-hidden='true'></span></a>
                        </span>                        
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
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        mounted() {
            this.getUsers(this.page);
            
            console.log('UserIndexComponent mounted.');
        },

        props: ['ctype', 'facultad_id', 'sede_id'],
        data() {
            return {
                users:[],
                /* DATA for pagination INIT */
                page:0,
                offset: 4,                 
                pagination: { 
                    'total' :0, 
                    'current_page'  :0, 
                    'per_page'  :0, 
                    'last_page' :0, 
                    'from'  :0, 
                    'to'  :0, 
                },    
                /* DATA for pagination END */

                /* DATA for buttons INIT */
                buttons:[],
                //byAllButtons:[],
                AllButtons: {
                    'datauser_show': {
                            'href': "/datauser/show/",
                            'user_id': true,
                            'title': "Ver Datos Personales",
                            'color': 'warning',
                            'icon': "user",
                            'id': 'datauser_show'
                    },
                    'datauser_edit': {
                            'href': "/datauser/edit/",
                            'user_id': true,
                            'title': "Modificar Datos Personales",
                            'color': 'success',
                            'icon': "earphone",
                            'id': 'datauser_edit'
                    },

                    'modi_user': {
                            'href': "/user/edit/",
                            'user_id': true,
                            'title': "Modificar usuario",
                            'color': 'warning',
                            'icon': "user",
                            'id': 'modi_user'
                    },                        
                    'edit_pass': {
                            'href': "/user/editpass/",
                            'user_id': true,
                            'title': "Modificar password",
                            'color': 'danger',
                            'icon': "lock",
                            'id': 'edit_pass'
                    },
                    'destroy': {
                            'href': "/user/destroy/",
                            'user_id': true,
                            'title': "Eliminar usuario",
                            'color': 'danger',
                            'icon': "trash",
                            'id': 'destroy'
                    },
                    'acceso': {
                            'href': "/acceso/edit/",
                            'user_id': true,
                            'title': "Modificar acceso del usuario",
                            'color': 'warning',
                            'icon': "ok",
                            'id': 'acceso'
                    },

                    'dhora': {
                            'href': "/dhora/edit/",
                            'user_id': true,
                            'title': "Disponibilidad Horaria",
                            'color': 'success',
                            'icon': "calendar",
                            'id': 'dhora'
                    },                    
                    'dcurso': {
                            'href': "/dcurso/edit/",
                            'user_id': true,
                            'color': 'success',
                            'title': "Disponibilidad de Cursos",
                            'icon': "list-alt",
                            'id': 'dcurso'
                    },
                },
                UserButtons: {
                    'Master' : [
                        'modi_user',
                        'edit_pass',
                        'datauser_edit',
                        'acceso',
                        'dhora',
                        'dcurso',
                        'destroy',
                        ],
                    'Consulta': [
                        'datauser_show',
                        ],
                    'Administrador': [
                        'modi_user',
                        'edit_pass',
                        'datauser_edit',
                        'acceso',
                        'dhora',
                        'dcurso',
                        'destroy',
                        ],
                },

                /* DATA for buttons END*/
            }
        },
        methods: {
            prefix: function () {
                var protocol = window.location.protocol;
                var URLdomain = window.location.host;
                var str = this.ctype;
                var lower = str.toLowerCase();
                return protocol+'//'+URLdomain+'/'+lower;
            },

            getUsers: function (page) {
                var protocol = window.location.protocol;
                var URLdomain = window.location.host;
                var urlItems = protocol+'//'+URLdomain+'/api/user/index/'+this.facultad_id+'/'+this.sede_id+'?page='+page;
                axios.get(urlItems).then(response=>{
                    this.pagination = response.data.pagination;
                    this.users = response.data.users.data;
                    this.defineButtons();
                })
                .catch(() => {
                    console.log('handle server error from UserIndexComponent.vue');
                });                
            },

            /* METHODS for pagination INIT */
            changePage(page) {
                this.pagination.current_page = page;
                this.getUsers(page);
                this.$emit('setPage' , page);
            },          
            /* METHODS for pagination END */

            /* METHODS for buttons INIT */
            defineButtons: function() {
                var ctype = this.ctype;
                for (var user in this.users){
                    this.buttons = [];

                    for(var xbutton in this.UserButtons[ctype]){

                        var opcion = this.UserButtons[ctype][xbutton];
                        this.buttons.push(this.AllButtons[opcion]);

                    };

                    if(this.buttons != ''){
                        this.users[user].buttons = this.buttons;
                    };
                };

            }
                
            /* METHODS for buttons END */

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

    /*

    <div>
        
    <select v-model="typeSelected">
        <option v-for="type in types" v-bind:value="type.name">
            {{ type.name }}
        </option>
    </select>
    </div>

    <p><a @click="searchText">Filtrar</a></p>
        <form @submit.prevent="searchName">
            <input v-model="searchText" type="text" class="form-control">
            <button class="btn btn-primary">Filtrar</button>
        </form>


    */
</script>
