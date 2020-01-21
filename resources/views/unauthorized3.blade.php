<!DOCTYPE html>
<html>
<head>
	<title></title>

    <style>
        html,
body {
  height: 100%;
  min-height: 450px;
  font-family: "Dosis", sans-serif;
  font-size: 32px;
  font-weight: 500;
  color: #5d7399;
}

.content {
  height: 100%;
  position: relative;
  z-index: 1;
  background-color: #d2e1ec;
  background-image: linear-gradient(to bottom, #bbcfe1 0%, #e8f2f6 80%);
  overflow: hidden;
}

.snow {
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 20;
}

.main-text {
  padding: 20vh 20px 0 20px;
  text-align: center;
  line-height: 2em;
  font-size: 5vh;
}

.home-link {
  font-size: 0.6em;
  font-weight: 400;
  color: inherit;
  text-decoration: none;
  opacity: 0.6;
  border-bottom: 1px dashed rgba(93, 115, 153, 0.5);
}
.home-link:hover {
  opacity: 1;
}

.ground {
  height: 160px;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 0;
  background: #f6f9fa;
  box-shadow: 0 0 10px 10px #f6f9fa;
}
.ground:before, .ground:after {
  content: "";
  display: block;
  width: 250px;
  height: 250px;
  position: absolute;
  top: -62.5px;
  z-index: -1;
  background: transparent;
  -webkit-transform: scaleX(0.2) rotate(45deg);
          transform: scaleX(0.2) rotate(45deg);
}
.ground:after {
  left: 50%;
  margin-left: -166.6666666667px;
  box-shadow: -295px 305px 15px #8a9bb8, -590px 610px 15px #b7c1d3, -945px 855px 15px #adb9cd, -1170px 1230px 15px #aab6cb, -1525px 1475px 15px #9dabc4, -1755px 1845px 15px #94a3be, -2080px 2120px 15px #b7c1d3, -2415px 2385px 15px #9dabc4, -2690px 2710px 15px #bac4d5, -3040px 2960px 15px #b4bed1, -3310px 3290px 15px #b4bed1, -3560px 3640px 15px #8a9bb8, -3875px 3925px 15px #a1aec6, -4190px 4210px 15px #adb9cd, -4530px 4470px 15px #b0bccf, -4825px 4775px 15px #8798b6;
}
.ground:before {
  right: 50%;
  margin-right: -166.6666666667px;
  box-shadow: 305px -295px 15px #bac4d5, 580px -620px 15px #9dabc4, 935px -865px 15px #a1aec6, 1250px -1150px 15px #8496b4, 1535px -1465px 15px #9aa9c2, 1845px -1755px 15px #a4b1c8, 2075px -2125px 15px #94a3be, 2370px -2430px 15px #a7b4c9, 2715px -2685px 15px #91a1bc, 2995px -3005px 15px #7e90b0, 3295px -3305px 15px #94a3be, 3635px -3565px 15px #adb9cd, 3895px -3905px 15px #97a6c0, 4190px -4210px 15px #a4b1c8, 4510px -4490px 15px #7e90b0, 4850px -4750px 15px #8496b4;
}

.mound {
  margin-top: -80px;
  font-weight: 800;
  font-size: 180px;
  text-align: center;
  color: #dd4040;
  pointer-events: none;
}
.mound:before {
  content: "";
  display: block;
  width: 600px;
  height: 200px;
  position: absolute;
  left: 50%;
  margin-left: -300px;
  top: 50px;
  z-index: 1;
  border-radius: 100%;
  background-color: #e8f2f6;
  background-image: linear-gradient(to bottom, #dee8f1, #f6f9fa 60px);
}
.mound:after {
  content: "";
  display: block;
  width: 28px;
  height: 6px;
  position: absolute;
  left: 50%;
  margin-left: -150px;
  top: 68px;
  z-index: 2;
  background: #dd4040;
  border-radius: 100%;
  -webkit-transform: rotate(-15deg);
          transform: rotate(-15deg);
  box-shadow: -56px 12px 0 1px #dd4040, -126px 6px 0 2px #dd4040, -196px 24px 0 3px #dd4040;
}

.mound_text {
  -webkit-transform: rotate(6deg);
          transform: rotate(6deg);
}

.mound_spade {
  display: block;
  width: 35px;
  height: 30px;
  position: absolute;
  right: 50%;
  top: 42%;
  margin-right: -250px;
  z-index: 0;
  -webkit-transform: rotate(35deg);
          transform: rotate(35deg);
  background: #dd4040;
}
.mound_spade:before, .mound_spade:after {
  content: "";
  display: block;
  position: absolute;
}
.mound_spade:before {
  width: 40%;
  height: 30px;
  bottom: 98%;
  left: 50%;
  margin-left: -20%;
  background: #dd4040;
}
.mound_spade:after {
  width: 100%;
  height: 30px;
  top: -55px;
  left: 0%;
  box-sizing: border-box;
  border: 10px solid #dd4040;
  border-radius: 4px 4px 20px 20px;
}

    </style>
</head>
<body>
	<div class="content">
	  <canvas class="snow" id="snow"></canvas>
	  <div class="main-text">
	    <h1>oops!!!!!.<br/>You are not authorized to see the page.</h1><a class="home-link" href="#">Hitch a ride back home.</a>
	  </div>
	  <div class="ground">
	    <div class="mound"> 
	      <div class="mound_text">404</div>
	      <div class="mound_spade"></div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">
		(function() {
	function ready(fn) {
		if (document.readyState != "loading") {
			fn();
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}

	function makeSnow(el) {
		var ctx = el.getContext("2d");
		var width = 0;
		var height = 0;
		var particles = [];

		var Particle = function() {
			this.x = this.y = this.dx = this.dy = 0;
			this.reset();
		};

		Particle.prototype.reset = function() {
			this.y = Math.random() * height;
			this.x = Math.random() * width;
			this.dx = Math.random() * 1 - 0.5;
			this.dy = Math.random() * 0.5 + 0.5;
		};

		function createParticles(count) {
			if (count != particles.length) {
				particles = [];
				for (var i = 0; i < count; i++) {
					particles.push(new Particle());
				}
			}
		}

		function onResize() {
			width = window.innerWidth;
			height = window.innerHeight;
			el.width = width;
			el.height = height;

			createParticles(width * height / 10000);
		}

		function updateParticles() {
			ctx.clearRect(0, 0, width, height);
			ctx.fillStyle = "#f6f9fa";

			particles.forEach(function(particle) {
				particle.y += particle.dy;
				particle.x += particle.dx;

				if (particle.y > height) {
					particle.y = 0;
				}

				if (particle.x > width) {
					particle.reset();
					particle.y = 0;
				}

				ctx.beginPath();
				ctx.arc(particle.x, particle.y, 5, 0, Math.PI * 2, false);
				ctx.fill();
			});

			window.requestAnimationFrame(updateParticles);
		}

		onResize();
		updateParticles();

		window.addEventListener("resize", onResize);
	}

	ready(function() {
		var canvas = document.getElementById("snow");
		makeSnow(canvas);
	});
})();

	</script>
</body>
</html>