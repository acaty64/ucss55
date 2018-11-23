<template>
    <div id="grupos" dusk="dcursogrupo-component">
        <h3>Seleccione el grupo</h3>
        <select dusk="sel_grupos" id="sel_grupos" v-model="item" class="form-control" v-on:change="registerItem">
          <option v-for="item in grupos" :value="item">
            {{ item.wgrupo }}
          </option>
        </select>
    </div>
</template>

<script>
    export default {
        props: ['grupos'],
        data(){ 
            return {
                item: []
            }
        },
        methods: {
            registerItem() {
                this.$emit('changeGrupo', this.item);
            }
        }
    }
</script>

<style scoped>
    #grupos {
        box-shadow: 1px 1px 2px 1px #ccc;
        margin: 20px;
        padding: 20px;
        display: inline-block;
        width: 300px;
        vertical-align: top;
    }
</style>
