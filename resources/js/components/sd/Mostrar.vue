<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header">Nombre escrito</div>

                    <div class="card-body">
                        <h5>{{ orden.name }}</h5> 
                        <h5>{{ orden.desc }}</h5>
                        <button class="btn btn-warning">Cambiar</button>
                        <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['orden'],
        data(){
            return{
                orden:{
                }
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickDelete(){
                this.$emit('delete');
            }
    }
</script>