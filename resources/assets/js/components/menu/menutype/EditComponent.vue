<template>
    <div name="main">
      <nav class="navbar navbar-default">
        <div class="container-fluid"> 
          <div class="btn-group" role="group" aria-label="...">
            <span v-for="type in types"  class="nav-item">
              <button type="button" class="btn btn-default">
                <input type="checkbox" :name="name_type(type.id)" v-model="type.checked" @change="check_type(type.id)">
                {{ type.name }}
              </button>
            </span>
          </div>
          <div>
            <span v-if="!new_menu && !modify">            
              <button id="add_menu" @click="view_new(0,'')" class="btn btn-success" data-toggle="tooltip" title="Agrega Menu" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
            </span>
            <span v-if="modify">
              <button id="save" @click="save()" class="btn btn-success" data-toggle="tooltip" title="Grabar" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
            </span>            
          </div>
        </div>
      </nav>
      <span v-if="!new_menu">
        <div class="container">
          <div class="row">        
            <div class="col-sm-4"><b>Nivel 0</b></div>
            <div class="col-sm-4"><b>Nivel 1</b></div>
            <div class="col-sm-4"><b>Acciones</b></div>
          </div>
        </div>
        <div class="container">
          <span v-for="nivel0 in grid">
            <div class="row row-body">
              <div class="row">
                <div class="col-sm-4">{{ menu_name(nivel0.menu_id) }} (href: {{ menu_href(nivel0.menu_id) }})</div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                  <button :id="'destroy'+nivel0.menu_id" @click="destroy(0, nivel0, 0)" class="btn btn-danger" data-toggle="tooltip" title="Elimina registro" ><span class="glyphicon glyphicon-trash"></span></button>
                  <button :id="'up'+nivel0.menu_id" @click="up(0, nivel0, grid)" class="btn btn-success" data-toggle="tooltip" title="Sube de Orden" ><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>
                  <button :id="'down'+nivel0.menu_id" @click="down(0, nivel0)" class="btn btn-success" data-toggle="tooltip" title="Baja de Orden" ><span class="glyphicon glyphicon-arrow-down" aria-hidden='true'></span></button>
                  <button :id="'add'+nivel0.menu_id" @click="add(0, nivel0)" class="btn btn-warning" data-toggle="tooltip" title="Agrega Opción Nivel 1" ><span class="glyphicon glyphicon-plus" aria-hidden='true'></span></button>
                  <!-- Elimina / Sube / Baja / Agrega Opción Nivel1 -->
                </div>
              </div>
              <div class="row" v-if="nivel0.data">
                <span v-for="nivel1 in nivel0.data">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                      {{ menu_name(nivel1.menu_id) }} (href: {{ menu_href(nivel1.menu_id) }})
                  </div>
                  <div class="col-sm-4">
                    <button :id="'destroy'+nivel0.menu_id" @click="destroy(1, nivel0, nivel1)" class="btn btn-danger" data-toggle="tooltip" title="Elimina registro" ><span class="glyphicon glyphicon-trash"></span></button>
                    <button :id="'up'+nivel0.menu_id" @click="up(1, nivel1, nivel0.data)" class="btn btn-success" data-toggle="tooltip" title="Sube de Orden" ><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>
                    <button :id="'down'+nivel0.menu_id" @click="down(1, nivel1)" class="btn btn-success" data-toggle="tooltip" title="Baja de Orden" ><span class="glyphicon glyphicon-arrow-down" aria-hidden='true'></span></button>
                    <!-- Elimina / Sube / Baja -->
                  </div>
                </span>
              </div>
            </div>
          </span>
        </div>
      </span>

      <div class="container" v-if="new_menu">
        <p>Menus a agregar</p>
        <div v-for="menu in menus">
          <span v-if="!menu.checked">
            <input type="checkbox" v-model="menu.checked" @change="check_menu(menu)">{{ menu.name }}
          </span>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    mounted() {
      this.getData();            
      console.log('menutype/EditComponent mounted.');
    },

    props: [''],
    data() {
      return {
        types:[],
        menus:[],
        menutypes:[],
        ntype:1,
        grid:[],
        last_item:0,
        new_menu:false,
        modify:false,
        nivel_add:0,
        preitem:[],
      }
    },
    methods: {
      renumber(){
        var order = 0;
        for (var i = 0; i <= this.grid.length - 1; i++) {
          this.grid[i].order = order;
          var level = 0;
          if(this.grid[i].data){
            for (var j = 0; j <= this.grid[i].data.length - 1; j++) {
              this.grid[i].data[j].order = order;
              this.grid[i].data[j].level = ++level;
            }  
          }
          order = order + 1;
        }
      },
      view_new(nivel, item){
        this.nivel_add = nivel;
        this.preitem = item;
        alert("view_new. En construccion. ");
        this.new_menu=true;
      },
      destroy(type, nivel0, nivel1){
        if(type == 0){
          var id = nivel0.menu_id;
          var pos = this.grid.map(function(e) { return e.menu_id; }).indexOf(id);
          this.grid.splice(pos,1);
        }else{
          var id_0 = nivel0.menu_id;
          var id_1 = nivel1.menu_id;
          var pos0 = this.grid.map(function(e) { return e.menu_id; }).indexOf(id_0);
          var pos1 = this.grid[pos0].data.map(function(e) { return e.menu_id; }).indexOf(id_1);
          var new_data = this.grid;
          new_data[pos0].data.splice(pos1,1);
          this.grid = [];
          this.grid = new_data;
        }
        this.modify = true;
      },
      getIndex: function(item, items){
        // console.log('item: ', item);
        // console.log('items: ', items);
        var index = 0; 
        for (var i = items.length - 1; i >= 0; i--) {
          if(items[i].id == item.id){
            return index;
          }
          index++;
        }
      },
      up(type, item, items){
        this.modify = true;
        alert("up(item). En construccion. "+ item.id);
        // var nIndex = this.getIndex(item, items);
        // console.log("up item.index: ", nIndex);
        // if(nIndex > 0){
        //   var pre = items.filter(function(item) {
        //     if(this.getIndex(item,items) < nIndex){
        //       return item;
        //     }
        //   });
        //   console.log("up pre: ", pre);
          
        //   // var post = items.filter(function(item) {
        //   //   return this.getIndex(item,items) > nIndex;
        //   // });
        //   // console.log("up post: ", post);

        // }else{
        //   alert("No se puede subir de orden.");
        // }
      },
      down(type, item){
        this.modify = true;
        alert("down(item). En construccion. "+ item.id);
      },
      add(type, item){
        this.view_new(1, item);
        this.modify = true;
        alert("add(item). En construccion. "+ item.id);
      },
      save(){
        this.renumber();
        this.modify = false;
        this.new_menu = false;
        alert("save(). En construccion. ");
        // this.getData();
      },
      menu_name(menu_id){
        var data = this.menus.filter( (menu) => menu.id == menu_id );        
        return data[0].name;
      },
      menu_href(menu_id){
        var data = this.menus.filter( (menu) => menu.id == menu_id );        
        return data[0].href;
      },
      setGrid(){
        var nivel0 = [];
        var data = this.menutypes.filter( (menutype) => menutype.type_id == this.ntype );
        var level0 = data.filter( (menutype) => menutype.level == 0 );
        for(var item0 in level0){
          nivel0.push(level0[item0]);
          var col = level0[item0].order;
          var level1 = data.filter( (menutype) => menutype.level > 0 && menutype.order == col );
          var nivel1 = [];
          for(var item1 in level1){
            nivel1.push(level1[item1]);
          };          
          if(nivel1.length > 0){
            nivel0[item0]['data'] = nivel1;
          }
        };
        this.grid = nivel0;
        this.last_item = this.grid.length;
      },
      check_menu: function (item) {
        var nivel = this.nivel_add;
        var preitem = this.preitem;
        if(nivel == 0){
          // Busca order
          var order = 0;
          for (var i = 0; i <= this.grid.length - 1; i++) {
            if(this.grid[i].order > order){
              order = this.grid[i].order;
            }
          }
          var new_item ={ 
              id:'new', 
              level: this.nivel_add,
              menu_id: item.id,
              order: order, 
              type_id: this.ntype,
            };
          this.grid.push(new_item);
        }else{
          // Busca level
          var level = 0;
          for (var i = 0; i <= this.preitem.data.length - 1; i++) {
            if(this.preitem.data[i].level > level){
              level = this.preitem.data[i].level;
            }
          }          
          for (var i = this.grid.length - 1; i >= 0; i--) {
            if(this.grid[i].id == this.preitem.id){
              var new_item ={ 
                  id:'new', 
                  level: ++level,
                  menu_id: item.id,
                  order: this.preitem.order, 
                  type_id: this.ntype,
                };
              this.grid[i].data.push(new_item);
            }
          }
        }
        this.new_menu = false;
        this.modify = true;
      },
      checked_type: function () {
        for (var i = this.types.length - 1; i >= 0; i--) {
          this.types[i].checked = false;
          if(this.ntype == this.types[i].id){
            this.types[i].checked = true;
          }
        }
      },
      check_type: function (id) {
        this.ntype = id;
        this.checked_type();
        this.checked_menu();
        this.setGrid();
        this.new_menu = false;
        this.modify = false;
      },
      checked_menu: function () {
        for (var i = this.menus.length - 1; i >= 0; i--) {
          this.menus[i].checked = false;
        }
        var checked = this.menutypes.filter( (menutype) => menutype.type_id == this.ntype );
        for (var i = checked.length - 1; i >= 0; i--) {
          var item = checked[i];
          var narray = this.findById(this.menus, item.menu_id); 
          this.menus[narray].checked = true;
        }
      },
      getData: function () {
        var protocol = window.location.protocol;
        var URLdomain = window.location.host;
        var urlItems = protocol+'//'+URLdomain+'/api/menutype/edit';
        axios.get(urlItems).then(response=>{
// console.log('data: ', response.data);
          this.types = response.data.types;
          this.menus = response.data.menus;
          this.menutypes = response.data.menutypes;
          this.checked_type();
          this.checked_menu();
          /* order, level, menu_id, type_id */
          this.sortOrder();
          this.sortLevel();
          this.sortMenu_id();
          this.sortType_id();
          this.setGrid();
        })
        .catch(() => {
          console.log('handle server error from MenuTypeEditComponent.vue');
        });                
      },
      name_type: function (id) {
        return "type"+id;
      },
      name_menu: function (id) {
        return "menu"+id;
      },
      findById: function (items, id){
        for (var i in items) {
            if (items[i].id == id) {
                return i;
            }
        }
        return null;
      },

      sortOrder(){
          this.menus.sort(function (a, b){
              return (a.order - b.order);
          });
      },

      sortLevel(){
          this.menus.sort(function (a, b){
              return (a.level - b.level);
          });
      },

      sortMenu_id(){
          this.menus.sort(function (a, b){
              return (a.menu_id - b.menu_id);
          });
      },

      sortType_id(){
          this.menus.sort(function (a, b){
              return (a.type_id - b.type_id);
          });
      },

    },

    // computed: { 
    //   /* COMPUTED for pagination INIT */
    //   isActived : function() {    
    //     // return this.pagination.current_page;
    //   },      
    //   /* COMPUTED for pagination END */
    // },  

  }

</script>

<style>
  th {
    width: 30%;
  }
  td {
    width: 30%;
  }
  .row-body {
    border-style:solid;
    border-width: thin;
  }
/*  .row-striped :nth-child(odd){
    background-color:red;
  }
  .row-striped :nth-child(even){
    background-color:green;
  }*/
</style>
