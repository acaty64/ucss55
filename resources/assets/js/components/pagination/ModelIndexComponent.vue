<template>
    <div> 
        <table class="table table-striped table-condensed table-hover">
            <thead>
                <th>id</th>
                <th>Campo1</th>
                <th>Campo2</th>
            </thead>
            <tbody>  
                <tr v-for="item in datos"> 
                    <td>{{ item.id }}</td>
                    <td>{{ item.campo1 }}</td>
                    <td>{{ item.campo2 }}</td>                   
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
      this.getModels(this.page);            
      console.log('ModelIndexComponent mounted.');
    },

    props: [''],
    data() {
      return {
        datos:[],
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
      }
    },
    methods: {
      getModels: function (page) {
        var protocol = window.location.protocol;
        var URLdomain = window.location.host;
        var urlItems = protocol+'//'+URLdomain+'/api/model/index/'+'?page='+page;
        axios.get(urlItems).then(response=>{
          this.pagination = response.data.pagination;
          this.datos = response.data.data.data;
          // this.models = response.data.models.data;
        })
        .catch(() => {
          console.log('handle server error from ModelIndexComponent.vue');
        });                
      },

      /* METHODS for pagination INIT */
      changePage(page) {
        this.pagination.current_page = page;
        this.getModels(page);
        this.$emit('setPage' , page);
      },          
      /* METHODS for pagination END */


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
