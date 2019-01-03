<template>
<div id="app">
  <h3>Got jokes?</h3>
  <button class="btn btn-primary" @click="initJokes">Add Ten Random Jokes</button>
  <button class="btn btn-primary" @click="addJoke">Add Joke</button>
  <br/>
  <span v-for="type in types">
    <input type="checkbox" :value="type" v-model="checkTypes" checked/>
    <label>{{type}}</label> &nbsp;
  </span>
  <br/>
  <div class="col-md-12">
    <Joke
      v-for="(joke, index) in $store.state.jokes"
      :joke="joke"
      :index="index"
      v-show="checkTypes.includes(joke.type)"
      key="index"
    />
  </div>
</div>
</template>

<script>
import { mapActions } from 'vuex'
import Joke from './Joke.vue'
export default {
  data(){
    return{
      types:['general','knock-knock','programming'],
      checkTypes:['general','knock-knock','programming']
    }
  },
  methods: mapActions([
    'initJokes',
    'addJoke'
    
  ]),
  components: {
    Joke
  }
}
</script>