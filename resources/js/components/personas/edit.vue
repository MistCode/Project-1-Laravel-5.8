<template>
<input v-if="editMode" type="text" class="form-control" placeholder="Imagen Url" v-model="persona.picture"> 
          <img v-else style="height: 150px; width: 100px; background-color: #EFEFEF; margin-top: 5px;" v-bind:src="persona.picture" class="card-img-top rounded-circle mx-auto d-block border border-danger" alt="">
          <div class="card-body">
            <input v-if="editMode" type="text" class="form-control" placeholder="Nombre" v-model="persona.name">
            <h5 class="card-title" v-else> {{ persona.name }} </h5>
            <a href="#" class="btn btn-primary">Ver Más Info+</a>
            <button v-if="editMode" class="btn btn-success" @click.prevent="updatePersona(index, persona)">Actualizar</button>
            <button v-else class="btn btn-warning" @click.prevent="editPersona()">Editar</button>
            <button class="btn btn-danger" @click.prevent="deletePersona(persona, index)">Eliminar</button>
</template>
<script>
  import EventBus from '../../event-bus'
  export default{
    props:['persona','index'],
    data(){
      return {
        editMode: false
    }
  },
  methods:{
          deletePersona: function(persona, index){
            let currentRoute = window.location.pathname
            var url = `http://localhost${currentRoute}/personas/` + persona.id;
            axios
            .delete(url)
            .then((res) => {
              console.log(res)
              this.$emit('delete');
            })
            .catch(function(err){
                console.log(err)
            })
          },
          editPersona: function(){
            this.editMode = true;
          },
          updatePersona: function(index, persona){
            let currentRoute = window.location.pathname
            var url = `http://localhost${currentRoute}/personas/` + persona.id;
            axios.put(url, {
              name: persona.name,
              picture: persona.picture
            })
            .then((res) => {
              console.log(res)
              this.editMode = false;
              const persona = response.data;
              this.$emit('update', persona);
            })
              .catch(function(err){
              console.log(err)
            })
          }
  }
}
</script>

<style>
</style>