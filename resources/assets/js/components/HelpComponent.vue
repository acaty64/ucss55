<template>
    <!--img v-show="loadHelp" src="/images/loadHelp.gif"></img-->
    <div id="help_app" class="panel-body">
        <div class="conteiner" style="margin-top: 0px;">
            <ul class="nav nav-tabs">
                <li v-for="help in helps">
                    <a @click="helpView(help.id)" data-toggle='tab'>{{ help.name }}</a>
                </li>
            </ul>
            <div class="tab-content">
                    <h4>{{ helpPanel.name }} </h4>
                    {{ helpPanel.help }} 
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        props: ['type_id'],
        mounted() {
            console.log('Help-Component mounted.');
        },

        created: function () {
            this.getHelps();
        },

        data() {
            return{
                    helps:[],
                    helpPanel: "",
            }
        },

        methods: {
            getHelps: function() {
                var URLdomain = window.location.host;
                var protocol = window.location.protocol;
                var urlHelps = protocol+'//'+URLdomain+'/api/generarHelp/'+this.type_id;
                //console.log('urlHelps: '+urlHelps);
                axios.get(urlHelps).then(response=>{
                    this.helps = response.data;
                    this.helpView(1);
                });
            },

            helpView: function (id) {
                this.helpPanel = this.findById(this.helps, id);
            },

            findById: function (helps, id) {
                for (var i in helps) {
                    if (helps[i].id == id) {
                        return helps[i];
                    }
                }
                return null;
            },
        },                
    }
</script>

<!--script type="text/javascript">
    function findById(helps, id) {
        for (var i in helps) {
            if (helps[i].id == id) {
                return helps[i];
            }
        }
        return null;
    }

    new Vue({
        el: "#help_app",
        data: {
            helps:[],
            helpPanel: "",
            loadHelp: false,
        },

        ready: function() {
            this.loadHelp = true;
            this.$http.get('/api/generarHelp/{{Session::get("type_id")}}')
            .then(function (response) {
                this.helps = response.data;
                this.helpView(1);
            });
            this.loadHelp = false;
        },

        methods: {
            helpView: function (id) {
                this.helpPanel = findById(this.helps, id);
            }
        },
    });
</script-->