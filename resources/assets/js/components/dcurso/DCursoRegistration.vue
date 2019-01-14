<template>
    <div id="registration" dusk="dcursoregistration-component">
        <h3>Seleccione el curso</h3>
        <hr>
        <div class="row" v-for="item in items">
            <!-- <button @click="viewItem(item)">View</button> -->
            <span title="Ver syllabus del curso">            
                <a :href="viewItem(item)" target="_blank">View</a>
            </span>
            <span title="Selecciona el curso">            
                <a href="#" @click="registerItem(item)">{{ item.wcurso }}</a>
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['items', 'URLdomain', 'protocol'],
        methods: {
            registerItem(item) {
                this.$emit('itemRegistered', item);
                item.registered != false;
            },

            viewItem(item) {
                return this.protocol + "//" + this.URLdomain + "/docente/pdf/syllabus/" + item.curso_id;
                // alert("Pendiente vista PDF del syllabus del curso ("+item.ccurso+"): "+item.wcurso);
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

    .view a {
        color: blue
    }

    .selection a{
        color: green
    }

</style>
