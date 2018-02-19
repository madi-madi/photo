<template>
<div>

		
		
     <div v-if="!cropped">
 <vue-avatar
        :width=200
        :height=200
        :border = 1
        ref="vueavatar"
        @vue-avatar-editor:image-ready="onImageReady"
        image="http://127.0.0.1:8000/storage/images.png"
      >
      </vue-avatar>
      <br>
      <vue-avatar-scale
        ref="vueavatarscale"
        @vue-avatar-editor-scale:change-scale="onChangeScale"
        :width=200
        :hight=200
        :min=1
        :max=3
        :step=0.02
      >
      </vue-avatar-scale>
      <br>
      <button v-on:click="saveClicked">Click</button>
     </div>
      
      <div v-else>
      	<img :src ="image" alt="Image" name="image">
		<button :style="changeavatar" class="btn btn-danger" @click="startCropping">Edit</button>
      </div>

</div>

</template>

<script>
import Vue from 'vue'
import VueAvatar from '../vue-avatar-editor/src/components/VueAvatar.vue'
import VueAvatarScale from '../vue-avatar-editor/src/components/VueAvatarScale.vue'

export default{
  components: {
    VueAvatar,
    VueAvatarScale
  },

  data(){

  return{
   
  	cropImage:null,
  	cropped:false,
  	changeavatar:{

  	    position: 'absolute',
    top: '40%',
    right: '48%',
    background: '#27262699',
    fontSize: '16px',
    fontWeight: 'bold',
    borderColor:'#fff'
  	}

  }
  },
  methods:{
    onChangeScale (scale) {

    	
        this.$refs.vueavatar.changeScale(scale)
    },
    saveClicked(){
      var img = this.$refs.vueavatar.getImageScaled()
      // use img
      this.image = img.toDataURL()
      this.cropped=true
     // console.log(this.img);
     // console.log(this.image)
        this.upload(this.image)
    },
    upload(image){
        console.log(image);
        axios.post('/upload',this.image)

        .then( res=>{

this.$toasted.show('Avaatar is Uploaded ! ...',{type:'success',closeOnSwipe:true});

      this.loaded = false;

        })
        },
    onImageReady(scale){
      this.$refs.vueavatarscale.setScale(scale)
    },

    startCropping(){

    this.cropped = false;
    }
  }

}
</script>