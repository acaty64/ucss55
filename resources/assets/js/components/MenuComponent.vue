<template>
    <ul class="nav navbar-nav list-group-item list-inline">
        <li v-for="item in items">
            <span v-if="item.href=='submenu'">
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' role='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>{{item.name}}<span class='caret'></span></a>
                    <ul class='dropdown-menu'aria-labelledby='dropdownMenu2'>
                        <div v-for="subitem in item.submenu">
                            <li><a class="nav-item nav-link" :href=subitem.href>{{subitem.name}}</a></li>
                        </div>
                    </ul>
                </li>                
            </span>
            <span v-else>
                <a :href=item.href> {{ item.name }} </a>
            </span>
        </li>
    </ul>
</template>

<script>
    import axios from 'axios'
    export default {
        props: ['type_id', 'auth_id'],
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
                var urlItems = protocol+'//'+URLdomain+'/api/generar/'+this.type_id+'/'+this.auth_id;
                axios.get(urlItems).then(response=>{
                    this.items = response.data
                });
            },
        },

    }

</script>
