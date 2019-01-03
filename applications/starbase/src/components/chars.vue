<template>
	<div class="col-md-4" @click="switchChars">
		<div class="character-card">
			<h4 class="card-title">{{Chars.name}}</h4>
			<p class="card-text">Height: {{Chars.height}} cm</p>
			<p class="card-text">Mass: {{Chars.mass}} kg</p>
			<p class="card-text">Hair Color: {{Chars.hair_color}} cm</p>
			<p class="card-text">Eye Color: {{Chars.eye_color}} cm</p>
		</div>
		<br/>
	</div>
</template>
<script>
	export default{
	props:['id'],
		data(){
			return{
				Chars:{}
			}
		},
		methods:{
			fetchChars(id){
				fetch(`https://swapi.co/api/people/${id}`,{
					method:'GET'
				})
				.then(resp => resp.json())
				.then(json => this.Chars = json)
			},
			switchChars(){
				let random_id = Math.floor(Math.random() * 83) + 1
				this.fetchChars(random_id)
			}
		},
		created(){
			this.fetchChars(this.id)
		}
	}
</script>