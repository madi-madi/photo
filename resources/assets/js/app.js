
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
//<script src="https://cdn.jsdelivr.net/npm/vue"></script>

window.Vue = require('vue');


// register the plugin on vue
import Toasted from 'vue-toasted';

Vue.use(Toasted);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('custom-avatar', require('./components/vue-avatar.vue'));

Vue.component('save-image', require('./components/SaveImage.vue'));
import UploadForm from './components/UploadForm';
import SaveImage from './components/SaveImage';
const app = new Vue({
    el: '#app',
    components:{UploadForm},
  /* 
   data:{
         actros:[],
   		disableWhenSelect:false,
   		film:'',
   		actorShow:false,
   		actor:'',
   		
   },
   methods:{

   	GetFilm(){
   			//console.log(this.film)
   			if (this.film !== '') {

   				this.actorShow=true;
   				this.getAllActorsFromDatabase(this.film);
   			}else{

   				this.actorShow=false;

   				alert('Please Select Film');

   			}},
   	getAllActorsFromDatabase(id){
   		//this.$http.get('/film/'+id).then()
   	axios.get('/film/'+id).then(response =>{

         
          if (response.data.length >0) {
           // console.log(this.actros = response.data[0].actor)
           console.log(this.actros = response.data)
         }else{
            this.actorShow=false;
         }
      })
                .catch(error => console.log(error))

   		// if (response.data.length >0) {
   		// 	this.actrosFilm = response.data;
   		// }else{
   		// 	this.actorShow=false;
   		// }
 
   	}

}


    //alert("Done");
*/
    
});
