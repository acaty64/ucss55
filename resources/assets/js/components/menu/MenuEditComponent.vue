<template>
    <div> 
        <table class="table table-striped table-condensed table-hover">
            <thead>
                <th>Tipo de usuario</th>
                <th>Opciones de menu</th>
                <th>Acciones</th>
            </thead>
            <tbody>  
                <tr> 
                    <td>
                        <div class="row" v-for="type in types">
                          <input type="checkbox" name="type+type.id" }}>
                          {{ type.name }}
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
  import axios from 'axios';
  export default {
    mounted() {
      this.getData();            
      console.log('MenuEditComponent mounted.');
    },

    props: [''],
    data() {
      return {
        types:[],
        menus:[],
        menutypes:[],
      }
    },
    methods: {
      getData: function () {
        var protocol = window.location.protocol;
        var URLdomain = window.location.host;
        var urlItems = protocol+'//'+URLdomain+'/api/menutype/edit';
        axios.get(urlItems).then(response=>{
          this.types = response.data.types;
          this.menus = response.data.menus;
          this.menutypes = response.data.menutypes;
        })
        .catch(() => {
          console.log('handle server error from MenuEditComponent.vue');
        });                
      },
    },

    computed: { 
      /* COMPUTED for pagination INIT */
      isActived : function() {    
        // return this.pagination.current_page;
      },      
      /* COMPUTED for pagination END */
    },  

  }

</script>
