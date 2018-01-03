<template>
    <ul class="nav navbar-nav list-group-item list-inline">
        <li v-for="item in items">
            <span v-if='item.href'>
                <a :href=item.href> {{ item.name }} </a>
            </span>
            <span v-else>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' role='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>{{item.name}}<span class='caret'></span></a>
                    <ul class='dropdown-menu'aria-labelledby='dropdownMenu2'>
                        <div v-for="subitem in item.submenu">
                            <li><a class="nav-item nav-link" :href=subitem.href>{{subitem.name}}</a></li>
                        </div>
                    </ul>
                </li>                
            </span>
        </li>
    </ul>
</template>

<script>
    import axios from 'axios'
    export default {
        props: ['type_id'],
        mounted() {
            console.log('MenuComponent mounted.');
        },

        created: function () {
            this.getItems();
        },

        data() {
            return {
                items:[],
            }
        },

        methods: {
            getItems: function () {
                var URLdomain = window.location.host;
                var protocol = window.location.protocol;
                var urlItems = protocol+'//'+URLdomain+'/api/generar/'+this.type_id;
                axios.get(urlItems).then(response=>{
                    this.items = response.data
                });
            },
        },

    }


/*                items: [
                    {
                        'id' : 1, 
                        'name' : 'Inicio', 
                        'href' : 'home', 
                        'sw_auth' : false, 
                        'help' : 'Regresa a definir facultad y sede a acceder.', 
                    },
                    {
                        'id' : 2, 
                        'name' : 'Menus', 
                        'href':  'menu.index', 
                        'sw_auth' : true, 
                        'help' : 'Definición de opciones de menues.', 
                    },
                    {
                        'id' : 3, 
                        'name' : 'Generar', 
                        'sw_auth' : false, 
                        'help' : 'Generar archivos de Navegación y Ayuda.', 
                        'submenu': [
                                {'id' : 8, 'name' : 'Generar A'},
                                {'id' : 9, 'name' : 'Generar B'},
                            ],
                    },
                    {'id' : 4, 'name' : 'Generar Menus', 'href':  'menu.generar', 'sw_auth' : true, },
                    {'id' : 5, 'name' : 'Generar Ayuda', 'href' : 'menu.generarhelp', 'sw_auth' : true, },
                    {'id' : 6, 'name' : 'Tipos de Usuarios', 'href' : 'type.index', 'sw_auth' : true, 'help' : 'CRUD Tipo de usuario.', },
                    {'id' : 7, 'name' : 'Asignacion de Menus', 'href' : 'menutype.index', 'sw_auth' : true, 'help' : 'Asignación de opciones de menú a Tipo de Usuario.', },
                ],

        computed() {
            return{
                isSubmenu: function (item) {
                    return [this.item.href == 'submenu', true, false];
                },
            }
        },


        <li v-for="item in items" :class="[ item.href == 'submenu' ? '' : 'dropdown']">
            <div v-if="isSubmenu(item)">
                {{ item.name }}               
            </div>
            <div v-else>
                <a href="#" v-link="{{ item.href }}">{{ item.name }}</a>
            </div>
            {{item.name}}
        </li>



        <div v-if="submenu == false">
            <li><a href={{item.href}}>{{item.name}}</a></li>
        </div>
        <div v-if="submenu">
            <li class='dropdown'>
                <a href='#' class='dropdown-toggle' role='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>{{item.name}}<span class='caret'></span></a>
                <ul class='dropdown-menu'aria-labelledby='dropdownMenu2'>
                    <template v-for="subitem in item.submenu">
                        <li><a href={{subitem.href}}>{{subitem.name}}</a></li>
                    </template>
                </ul>
            </li>
        </div>

        ready: function() {
            this.loading = true;
            this.$http.get('/api/generar/{{Session::get("type_id")}}/{{ Auth::user()->id }}')
            .then(function (response) {
                this.items = response.data;
                this.loading = false;
            });
        },        
        computed:{
            submenu: function () {
                if(this.item.href == 'submenu'){
                    return true;
                }
                return false;
            }
       },
*/
</script>
