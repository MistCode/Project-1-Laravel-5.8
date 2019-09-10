<template>
	<div class="card text-center bg-white rounded border border-info" style="width: 40rem; margin-right: 40px; margin-top: 30px;">
				<div class="card-body">
					<div class="card-title">Crear Mensaje</div>
					<form @submit.prevent="newTabla()">
						  <div class="form-group row">
						    <label for="name" class="col-sm-2 col-form-label">Asunto</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="name" placeholder="Asunto" v-model="name">
						    </div>
						  </div>
						  <div class="form-group row">
						    <label for="mensaje" class="col-sm-2 col-form-label">Mensaje</label>
						    <div class="col-sm-10">
						      <textarea class="form-control" id="mensaje" placeholder="Contenido..." v-model="mensaje"></textarea>
						    </div>
						  </div>

						  <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>
</template>

<script>
	export default {
		data(){
			return{
				name: null,
				mensaje: null
			}
		},
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
        	newTabla: function(){
        		axios.post('../notas', {
        			name: this.name,
        			mensaje: this.mensaje
        		})
        		.then((response) => {
        			this.name = '',
        			this.mensaje =  '';
        			const tabla = response.data;
        			this.$emit('new', tabla);
				});
        	}
        }
    }
</script>