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
  height: 390px;
  width: 250px;
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
  width: 30px;
  text-align: center;
}

.naip-number {
  font-size: 45px; 
  font-family: 'Roboto Slab', serif;
  font-weight: 400;
}

.naip-sign {
  font-size: 40px;
}

.carta-miolo {
  position: absolute;
  top: 0;
  width: 250px;
}

/*--------- Miolo 1 -----------*/
.miolo-1 {
  text-align: center;
  line-height: 390px;
  font-size: 120px;
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
</style>
</head>
<body>
<div class="baralho">
		  	<!-- carta A / Paus -->
		  	<div class="carta">
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

		  	<!-- carta 1 / Paus -->
		  	<div class="carta">
		    	<div class="naip-area naip-top">
		      		<span class="naip-number">1</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="naip-area naip-bottom">
		      		<span class="naip-number">1</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="carta-miolo miolo-1">
		      		<span>&clubs;</span>
		    	</div>
		  	</div>

		  	<!-- carta 2 / Paus -->
		  	<div class="carta">
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
		  	<div class="carta">
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

		  	<!-- carta 4 / Paus -->
		  	<div class="carta">
		    	<div class="naip-area naip-top">
		      		<span class="naip-number">4</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="naip-area naip-bottom">
		      		<span class="naip-number">4</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="carta-miolo miolo-4">
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		    	</div>
		  	</div>

		  	<!-- carta 5 / Paus -->
		  	<div class="carta">
		    	<div class="naip-area naip-top">
		      		<span class="naip-number">5</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="naip-area naip-bottom">
		      		<span class="naip-number">5</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="carta-miolo miolo-5">
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		    	</div>
		  	</div>

		  	<!-- carta 6 / Paus -->
		  	<div class="carta">
		    	<div class="naip-area naip-top">
		      		<span class="naip-number">6</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="naip-area naip-bottom">
		      		<span class="naip-number">6</span>
		      		<span class="naip-sign">&clubs;</span>
		    	</div>

		    	<div class="carta-miolo miolo-6">
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		      		<span class="naip-miolo">&clubs;</span>
		    	</div>
		  	</div>
		</div>
</body>
</html>
