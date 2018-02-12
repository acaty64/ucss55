<template>
    <div id="grupos">
        <h3>Seleccione el grupo</h3>
        <hr>
        <div class="row" v-for="item in grupos">
            <p>{{ item.wgrupo }}</p>
            <button @click="registerItem(item)">Register</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['grupos'],
        methods: {
            registerItem(item) {
                this.$emit('changeGrupo', item);
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
