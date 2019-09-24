/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('lista-de-personas', require('./components/personas/list.vue').default);
Vue.component('modal-button', require('./components/personas/modal-button.vue').default);
Vue.component('create-form-person', require('./components/personas/add.vue').default);
Vue.component('contenido-person', require('./components/personas/contenido.vue').default);
Vue.component('spinner', require('./components/widgets/Spinner.vue').default);

Vue.component('tabla-mensaje', require('./components/notas/tabla.vue').default);
Vue.component('form-mensaje', require('./components/notas/formulario.vue').default);
Vue.component('todo', require('./components/notas/all.vue').default);

/**
Vue.component('F', require('./components/sd/Form.vue').default);
Vue.component('M', require('./components/sd/Mostrar.vue').default);
Vue.component('T', require('./components/sd/todos.vue').default);


No Eliminar
updatePersona: function(persona){
                let currentRoute = window.location.pathname
            var url = `http://localhost${currentRoute}/personas/` + persona.id;
            axios.put(url, {
              name: persona.name,
              picture: persona.picture
            })
            .then((res) => {
              console.log(res)
          this.editMode = false;
          this.personas[index, 1] = persona
            })
                .catch(function(err){
                    console.log(err)
                })
          }
esto es importante

 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
