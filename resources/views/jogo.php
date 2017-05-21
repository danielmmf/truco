<html>
<head>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:400);

body {
  background-color: gray;
}

.baralho {
  position: relative;
  left: 200px;
  top: 30px;
  width: 1200px;
}


.carta {
  background-color: white;
  height: 195px;
  width: 125px;
  border-radius: 15px;
  padding: 15px;
  box-sizing: content-box;
  position: relative;
  float: left;
  margin: 10px;
  box-shadow: -1px 1px 4px rgba(0,0,0,0.1);
}


.naip-area {
  height: 50%;
  width: 100%;
}

.naip-area:nth-child(2) {
  transform:rotate(180deg);
}

.naip-number, .naip-sign {
  display:block;
  width: 15px;
  text-align: center;
}

.naip-number {
  font-size: 25px; 
  font-family: 'Roboto Slab', serif;
  font-weight: 200;
}

.naip-sign {
  font-size: 20px;
}

.carta-miolo {
  position: absolute;
  top: 0;
  width: 125px;
}

/*--------- Miolo 1 -----------*/
.miolo-1 {
  text-align: center;
  line-height: 390px;
  font-size: 60px;
}

/*--------- Miolo 2 -----------*/
.miolo-2 {
  text-align: center;
  font-size: 70px;
  height: 100%;
}

.miolo-2 .naip-miolo {
  display: block;
  position: absolute;
  width: 100%;
}

.miolo-2 .naip-miolo:nth-child(2) {
  transform:rotate(180deg);
  bottom: 0;
}

/*--------- Miolo 3 -----------*/
.miolo-3 {
  text-align: center;
  font-size: 70px;
  height: 100%;
}

.miolo-3 .naip-miolo {
  display: block;
  position: absolute;
  width: 100%;
}

.miolo-3 .naip-miolo:nth-child(2) {
  top: 165px;
}

.miolo-3 .naip-miolo:nth-child(3) {
  transform:rotate(180deg);
  bottom: 0;
}

/*--------- Miolo 4 -----------*/
.miolo-4 {
  text-align: center;
  font-size: 70px;
  height: 100%;
}

.miolo-4 .naip-miolo {
  display: block;
  position: absolute;
  width: 50%;
}

.miolo-4 .naip-miolo:nth-child(1) {
  top: 0;
  left: 0;
}

.miolo-4 .naip-miolo:nth-child(2) {
  top: 0;
  right: 0;
}

.miolo-4 .naip-miolo:nth-child(3) {
  transform:rotate(180deg);
  bottom: 0;
  left: 0;
}

.miolo-4 .naip-miolo:nth-child(4) {
  transform:rotate(180deg);
  bottom: 0;
  right: 0;
}

/*--------- Miolo 5 -----------*/
.miolo-5 {
  text-align: center;
  font-size: 70px;
  height: 100%;
}

.miolo-5 .naip-miolo {
  display: block;
  position: absolute;
  width: 50%;
}

.miolo-5 .naip-miolo:nth-child(1) {
  top: 0;
  left: 0;
}

.miolo-5 .naip-miolo:nth-child(2) {
  top: 0;
  right: 0;
}

.miolo-5 .naip-miolo:nth-child(3) {
  transform:rotate(180deg);
  bottom: 0;
  left: 0;
}

.miolo-5 .naip-miolo:nth-child(4) {
  transform:rotate(180deg);
  bottom: 0;
  right: 0;
}

.miolo-5 .naip-miolo:nth-child(5) {
  top: 165px;
  left: 60px;
}


/*--------- Miolo 6 -----------*/
.miolo-6 {
  text-align: center;
  font-size: 70px;
  height: 100%;
}

.miolo-6 .naip-miolo {
  display: block;
  position: absolute;
  width: 50%;
}

.miolo-6 .naip-miolo:nth-child(1) {
  top: 0;
  left: 0;
}

.miolo-6 .naip-miolo:nth-child(2) {
  top: 0;
  right: 0;
}

.miolo-6 .naip-miolo:nth-child(3) {
  transform:rotate(180deg);
  bottom: 0;
  left: 0;
}

.miolo-6 .naip-miolo:nth-child(4) {
  transform:rotate(180deg);
  bottom: 0;
  right: 0;
}

.miolo-6 .naip-miolo:nth-child(5) {
  top: 165px;
  left:0;
}

.miolo-6 .naip-miolo:nth-child(6) {
  top: 165px;
  right:0;
}

#div1 {
margin-top:40px;
padding-top:20px;
 line-height:0;

 border-style: solid;
 border-color: #f00 #0f0 #00f #fc0;
 border-width: 0 160px 100px 50px;
 };

#jogadores{
	 width:50px;
 	height:50px;
}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
alert(ev);
console.log(ev);
    var data = ev.dataTransfer.getData("text");
ev.dataTransfer.dropEffect = 'move';
    ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>
<div id="jogadores">jogadores</div>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" width="200px" height="100px" style="color:blue">blablalba</div>



<div class="baralho">
		  	<!-- carta A / Paus -->
		  	<div class="carta" draggable="true"
ondragstart="drag(event)">
		    	<div class="naip-area naip-top">
		      		<span class="naip-number">A</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="naip-area naip-bottom">
		      		<span class="naip-number">A</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="carta-miolo miolo-1">
		      		<span>&clubs;</span>
		    	</div>
		  	</div>

		  	

		  	<!-- carta 2 / Paus -->
		  	<div class="carta" draggable="true"
ondragstart="drag(event)">
		    	<div class="naip-area naip-top">
		      		<span class="naip-number">2</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="naip-area naip-bottom">
		      		<span class="naip-number">2</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="carta-miolo miolo-2">
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		    	</div>
		  	</div>

		  	<!-- carta 3 / Paus -->
		  	<div class="carta"s draggable="true"
ondragstart="drag(event)">
		    	<div class="naip-area naip-top">
		      		<span class="naip-number">3</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="naip-area naip-bottom">
		      		<span class="naip-number">3</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="carta-miolo miolo-3">
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		    	</div>
		  	</div>

		  	

		  

		  	
		</div>
</body>
</html>
