<template>
	<tbody>
	   <tr>
	   		<input v-if="editMode" type="text" class="form-control" placeholder="Asunto" v-model="tabla.name">
			<th v-else scope="row">{{ tabla.name }}</th>

			<input v-if="editMode" type="text" class="form-control" placeholder="Contenido" v-model="tabla.mensaje">
			<td v-else>{{ tabla.mensaje }}</td>
			
			<td width="10px;">
				<button v-if="editMode" class="btn btn-success" @click.prevent="onClickUpdate(index, tabla)">Actualizar</button>
				<button v-else class="btn btn-warning" @click.prevent="onClickEdit()">Editar</button>
            </td>
            <td width="10px;">
				<button class="btn btn-danger" @click.prevent="onClickDelete(tabla)">Eliminar</button>
			</td>	    	
		</tr>
	</tbody>
</template>
<script>
	export default {
		props:['tabla','index'],
		data(){
			return{
				editMode: false
			};
		},
        methods: {
        	onClickDelete: function (tabla){
                let currentRoute = window.location.pathname
        		var url = `http://localhost${currentRoute}/notas/` + tabla.id;
        		axios.delete(url)
        		.then( (response => 
        			{
                        console.log(response)
        				this.$emit('delete');
        			})
        		)
                .catch(function(err){
                    console.log(err)
                });
        	},

        	onClickEdit: function(){
        		this.editMode = true;
        	},
        	onClickUpdate: function(index, tabla){
                let currentRoute = window.location.pathname
        		var url = `http://localhost${currentRoute}/notas/` + tabla.id;
        		axios.put(url, {
        			name: tabla.name,
        			mensaje: tabla.mensaje
        		})
        		.then((response) => {
                    console.log(response)
					this.editMode = false;
					const tabla = response.data;
	        		this.$emit('update', tabla);
        		})
                .catch(function(err){
                    console.log(err)
                });
        	}
        }
    }
</script>