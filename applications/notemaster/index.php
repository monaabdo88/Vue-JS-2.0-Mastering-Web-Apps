<!DOCTYPE html>
<html>
<head>
<title>VueJs Tuts</title>
<script src="https://unpkg.com/vue"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="http://davidtkatz.com/public_css/noteMaster.css">

</head>
<body>
<div id="app">
	<h3>{{title}}</h3>
	<div class="form">
		<div class="form-group">
			<div class="form-group">
				<label>Title</label>
				<input type="text" class="form-control" v-model="note.title">
			</div>
			<div class="form-group">
				<label>Note</label>
				<textarea v-model="note.text" class="form-control"></textarea>
			</div>
			<button class="btn btn-primary" @click="addNote">Add Note</button>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-4 note" v-for="(note,index) in notes">
			<div class="card">
				<button class="close text-right" @click="removeNote(index)">&times;</button>
				<div class="card-block">
					<h4 class="card-title">{{note.title}}</h4>
					<h6 class="card-subtitle mb-2 text-muted">{{note.date}}</h6>
					<p class="card-text">{{note.note}}</p>
				</div>
			</div>
		</div>
	</div>	
</div>
<script>
	var app = new Vue({
		el:"#app",
		data:{
			title:"NoteMaster",
			note:{
				title:'',
				text:''
			},
			notes:[
				{
					title:"Visit Hawaii",
					note:"Try to Relax and see new country",
					date:new Date(Date.now()).toLocaleString()
				}
			]
		},
		methods:{
			addNote(){
				let {title,text} = this.note
				this.notes.push({
					title,
					text,
					date:new Date(Date.now()).toLocaleString()
				})
			},
			removeNote(index){
				this.notes.splice(index,1)
			}
		}
	});

</script>
</body>
</html>