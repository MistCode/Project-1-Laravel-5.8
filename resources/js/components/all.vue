<template>
	<div class="container">
				<form-mensaje @new="addTabla"></form-mensaje>
				<table class="table" style="margin-top: 30px;">
				<thead class="thead-dark">
				    <tr>
				    	<th scope="col">Asunto</th>
				    	<th scope="col">Contenido</th>
				    	<th scope="col"></th>
				    </tr>
				</thead>
				<tabla-mensaje 
				v-for="(tabla, index) in tablas" 
				:key="tabla.id" 
				:tabla="tabla"
				@update="updateTable(index, ...arguments)" 
				@delete="deleteTabla(index)"></tabla-mensaje>
				
			</table>
				
	</div>
</template>

<script>
	export default {
		data(){
			return{
				tablas:[]
			}
		},
        mounted() {
            axios.get('http://localhost/Lavel/public/notas')
            .then((response) => {
            	this.tablas = response.data;
            });
        },
        methods:{
        	addTabla(tabla){
        		this.tablas.push(tabla);
        	},
        	updateTabla(index, tabla){
        		this.tablas[index] = tabla;
        	},
        	deleteTabla(index){
        		this.tablas.splice(index, 1);
        	}
        }
    }
</script>