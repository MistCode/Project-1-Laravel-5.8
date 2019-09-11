<template>
	<div class="container">
				<form-mensaje @new="addTabla"></form-mensaje>
				<table class="table table-hover" style="width: 45rem; margin-top: 30px; word-wrap: break-word;">
				<thead class="thead-dark">
				    <tr>
				    	<th width="100px;" scope="col">Asunto</th>
				    	<th width="300px;" scope="col">Contenido</th>
				    	<th colspan="2">&nbsp;</th>
				    </tr>
				</thead>
				<tabla-mensaje 
				v-for="(tabla, index) in tablas" 
				:key="tabla.id" 
				:tabla="tabla"
				@update="updateTabla(index, ...arguments)" 
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
        	let currentRoute = window.location.pathname

            axios.get(`http://localhost${currentRoute}/notas`)
            .then((response) => {
            	console.log(response)
            	this.tablas = response.data
            })
            .catch(function(err){
		        console.log(err)
			});
        },
        methods:{
        	addTabla: function(tabla) {
        		this.tablas.push(tabla)
        	},
        	updateTabla: function(index, tabla){
        		this.tablas[index] = tabla;
        	},
        	deleteTabla: function(index){
        		this.tablas.splice(index, 1);
        	}
        }
    }
</script>