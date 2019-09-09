<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header">Escribir Nombres</div>

                    <div class="card-body">
                        <form @submit.prevent="savePublicacion">
                        <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" v-model="name">
                        </div>
                        <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" v-model="desc">
                        </div>
                        <button type="submit" class=" btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EventBus from '../../event-bus';
    export default {
        data(){
            return{
                name: null,
                desc: null
            }
        },
        methods: {
            savePublicacion: function(){
                axios.post('http://localhost/Lavel/public/sd', {
                    name:this.name,
                    desc:this.desc
                })
                .then(function(res){
                    EventBus.$emit('orden-added', res.data.orden)
                })
                .catch(function(err){
                    console.log(err)
                });
            }
        }
    }
</script>