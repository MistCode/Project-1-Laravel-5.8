<template>
	<tbody>
	   <tr>
	   		<input v-if="editMode" type="text" class="form-control" placeholder="Asunto" v-model="tabla.name">
			<th v-else scope="row">{{ tabla.name }}</th>

			<input v-if="editMode" type="text" class="form-control" placeholder="Contenido" v-model="tabla.mensaje">
			<td v-else>{{ tabla.mensaje }}</td>
			
			<td>
				<button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Save</button>
				<button v-else class="btn btn-warning" v-on:click="onClickEdit()">Edit</button>
				<button class="btn btn-danger" v-on:click="onClickDelete()">Delete</button>
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
        	onClickDelete(){
        		axios.delete(`http://localhost/Lavel/public/notas/${this.tabla.id}`)
        		.then(() => {
					this.$emit('delete');
        		});
        		
        	},
        	onClickEdit(){
        		this.editMode = true;
        	},
        	onClickUpdate(){
        		const params ={
        			name: tabla.name,
        			mensaje: tabla.mensaje
        		};

        		axios.put(`http://localhost/Lavel/public/notas/${this.tabla.id}`, params).then((response) => {
					this.editMode = false;
					const tabla = response.data;
	        		this.$emit('update', tabla);
        		});

        		
        	}
        }
    }
</script>