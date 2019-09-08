<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <F></F>
                    <spinner v-show='loading'></spinner>
                    <M 
                    v-for="(orden, index) in ordens"
                    :key="orden.id"
                    :orden="orden"
                    @delete="deleteOrden(index)"></M>
            </div>
        </div>
    </div>
</template>

<script>
    import EventBus from '../../event-bus';
    export default {
        data(){
            return{
                ordens: [],
                loading: true
            }
        },
        
        created(){
            EventBus.$on('orden-added', data => {
                this.ordens.push(data)
            })
        },
        mounted() {
            axios
            .get('http://localhost/Lavel/public/sd')
            .then((res) => {
                this.ordens = res.data
                this.loading = false
            })
        },
        methods: {
            deleteOrden(index){
                this.ordens.splice(index, 1);
            }
        }
    }
</script>