<template>
	<tbody>
	   <tr>
	   		<input v-if="editMode" type="text" class="form-control" placeholder="Asunto" v-model="tabla.name">
			<th v-else scope="row">{{ tabla.name }}</th>

			<input v-if="editMode" type="text" class="form-control" placeholder="Contenido" v-model="tabla.mensaje">
			<td v-else>{{ tabla.mensaje }}</td>
			
			<td>
				<button v-if="editMode" class="btn btn-success" @click="onClickUpdate()">Save</button>
				<button v-else class="btn btn-warning" @click="onClickEdit()">Edit</button>
				<button class="btn btn-danger" @click.prevent="onClickDelete(tabla)">Deletes</button>
			</td>	    	
		</tr>
	</tbody>
</template>
<script>
	export default {
		props:['tabla'],
		data(){
			return{
				editMode: false
			};
		},
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
        	onClickDelete: function (tabla){
        		var url = "../notas/" + tabla.id;
        		axios.delete(url)
        		.then( (response => 
        			{ this.$emit('delete');
        			})
        		);
        	},

        	onClickEdit: function(){
        		this.editMode = true;
        	},
        	onClickUpdate: function(){
        		const params ={
        			name: tabla.name,
        			mensaje: tabla.mensaje
        		};

        		axios.put('../notas/${this.tabla.id}', ).then((response) => {
					this.editMode = false;
					const tabla = response.data;
	        		this.$emit('update', tabla);
        		});

        		
        	}
        }
    }
</script>