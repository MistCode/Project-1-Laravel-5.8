<template>
	<div class="row">
		<spinner v-show="loading"></spinner>
		<div class="col-sm" v-for="(persona, index) in personas">
			<div class="card text-center border border-info" style="width: 18rem; margin-right: 40px; margin-top: 30px;">	
				<img style="height: 150px; width: 100px; background-color: #EFEFEF; margin-top: 5px;" v-bind:src="persona.picture" class="card-img-top rounded-circle mx-auto d-block border border-primary" alt="">
				<div class="card-body">
					<h5 class="card-title"> {{ persona.name }} </h5>
					<a href="#" class="btn btn-primary">Ver Más Info+</a>
					<button class="btn btn-danger" @click="clickDelete(index)">Delete</button>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import EventBus from '../../event-bus'
	export default{
		data(){
			return {
				personas: [],
				loading: true
			}
		},
		created(){
			EventBus.$on('persona-added', data => {
				this.personas.push(data)
			})
		},
		mounted() {
			let currentRoute = window.location.pathname
            axios
            .get(`http://localhost${currentRoute}/personas`)
            .then((res) => {
            	console.log(res)
				this.personas = res.data
				this.loading = false
            })
        },
        methods:{
        	clickDelete: function (index){
        		this.personas.splice(index, 1);
        	}
        }
	}
</script>