<template>
    <div id="registrations" dusk="cursogruporegistrations-component">
        <div class="summary">
            <span v-if="total > 0 && sw_cambio">
                <button @click="save">Grabar cursos seleccionados</button>
            </span>
            <h3>Cursos Seleccionados</h3>
            <h5>Total: {{ total }}</h5>
        </div>
        <hr>
        <div class="row" v-for="registration in registrations">
            <p>{{ registration.wcurso }} <button @click="unregister(registration)">X</button></p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['registrations', 'sw_cambio'],
        methods: {
            unregister(registration) {
                this.$emit('itemUnregistered', registration);
            },
            save(){
                this.$emit('save');
            }
        },
        computed: {
            total() {
                return this.registrations.length;
            }
        },
    }
</script>

<style scoped>
    #registrations {
        box-shadow: 1px 1px 2px 1px #ccc;
        margin: 20px;
        padding: 20px;
        display: inline-block;
        width: 300px;
        vertical-align: top;
        text-align: left;
    }

    .summary {
        text-align: center;
    }

    .row h4 {
        display: inline-block;
        width: 30%;
        margin: 0 0 10px 0;
        box-sizing: border-box;
    }

    .row span {
        width: 30%;
        color: red;
        cursor: pointer;
    }

    .row span:hover {
        color: darkred;
    }

</style>