<template>
	<div id="app">
		<h3>{{title}}</h3>
		<div class="col-md-12">
			<chars v-for="(id,index) in initial_ids" :id="id" key="index"></chars>
		</div>	
	</div>
</template>
<script>
import chars from './components/chars.vue'
export default{
	name:'app',
	data(){
		return {
			title:"Generate Your Team",
			initial_ids:[1,13,15,19,20,10,25]
		}
	},
	components:{
		chars
	}
}
</script>