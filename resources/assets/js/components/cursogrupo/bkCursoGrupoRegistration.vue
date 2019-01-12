<template>
    <div id="registration" dusk="cursogruporegistration-component">
        <h3>Seleccione el curso</h3>
        <hr>
        <div class="row">
            <span v-for="letra in alfa">
                <button type="button" class="btn btn-light" @click="clickLetra(letra)">{{ letra }}</button>
            </span>
        </div>
        <div class="row" v-for="item in cursos">
            <!-- <button @click="viewItem(item)">View</button> -->
            <!-- <a :href="viewItem(item)" >View</a> -->
            <a href="#" @click="registerItem(item)">{{ item.wcurso }}</a>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('CursoGrupoRegistration mounted.');
            this.getData();
        },        
        props: ['items', 'URLdomain', 'protocol'],
        data() {
            return {
                cursos: [],
                alfabeto: "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
                alfa: [],                
            }
        },
        methods: {
            getData(){
                for (var i = 0; i <= this.alfabeto.length - 1; i++) {
                    this.alfa[i] = this.alfabeto.substring(i,i+1);
                }
console.log('getData alfa: ', alfa);
            },
            clickLetra(letra){
console.log('letra: ', letra);
                this.cursos = this.items.filter((i)=> i.wcurso.substring(0,1) == letra);
            },
            registerItem(item) {
                this.$emit('itemRegistered', item);
                item.registered != false;
            },

            // viewItem(item) {
            //     return this.protocol + "//" + this.URLdomain + "/docente/pdf/syllabus/" + item.curso_id;
            //     alert("Pendiente vista PDF del syllabus del curso ("+item.ccurso+"): "+item.wcurso);
            // }
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
