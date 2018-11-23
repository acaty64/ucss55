<template>
    <div id="registration" dusk="dcursoregistration-component">
        <h3>Seleccione el curso</h3>
        <hr>
        <div class="row" v-for="item in items">
            <button @click="viewItem(item)">View</button>
            <a href="#" @click="registerItem(item)">{{ item.wcurso }}</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['items'],
        methods: {
            registerItem(item) {
                this.$emit('itemRegistered', item);
                item.registered != false;
            },

            viewItem(item) {
/*
                var request = {
                      'item': this.item
                  };

                var url = this.protocol+'//'+this.URLdomain+'/docente/pdf/syllabus/'+this.item.ccurso
                axios.get(url, request).then(response=>{
                    console.log( response.data.data)
                });
*/
                alert("Pendiente vista PDF del syllabus del curso ("+item.ccurso+"): "+item.wcurso);
            }
        }
    }
</script>

<style scoped>
    #registration {
        box-shadow: 1px 1px 2px 1px #ccc;
        margin: 20px;
        padding: 20px;
        display: inline-block;
        width: 300px;
        vertical-align: top;
    }

    .row h4 {
        display: inline-block;
        width: 70%;
        text-align: left;
        margin: 0 0 10px 0;
    }

    button {
        background-color: lightgreen;
        border: none;
        box-shadow: 1px 1px 1px black;
        font-size: inherit;
        text-align: right;
        cursor: pointer;
    }

    button:hover {
        background-color: green;
    }
</style>
