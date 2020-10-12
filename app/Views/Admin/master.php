<?php require_once "../app/Views/Part/upfile.php" ?>

<div id="main">
	<div id="login">
		<div class="parallax-container">
			<div class="section">
				<div id="particles-js">
				</div>

				<div id="card-login">
					<div class="row">
						<div class="col s12" style="padding: 0;">
							<div class="card white z-depth-2" style="margin: 0;">
								<div class="card-header z-depth-1">
									<span class="center white-text" style="margin: 0;">Master Data</span>
								</div>
								<form id="loged" method="post">
									<div class="card-content blue-grey-text text-darken-4" style="padding-top: 1em;">
										<div class="input-field col s12">
											<i class="material-icons prefix">account_circle</i>
											<input id="icon_user" type="text" name="user" class="validate" required>
											<label for="icon_user">Username</label>
										</div>
										<div class="input-field col s12">
											<i class="material-icons prefix">lock</i>
											<input id="icon_pass" type="password" name="pass" class="validate" required>
											<label for="icon_pass">Password</label>
										</div>
									</div>
									<div class="card-action z-depth-1">
										<button type="submit" class="btn waves-effect waves-light right">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>	
				</div>
				
			</div>
			<div class="parallax">
				<img src="assets/img/bg_upper1.jfif">
			</div>
		</div>
	</div>
</div>

<div class="preloader-background">
	<div class="preloader-wrapper big active">
		<div class="spinner-layer spinner-blue">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>
		<div class="spinner-layer spinner-red">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>
		<div class="spinner-layer spinner-yellow">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>
		<div class="spinner-layer spinner-green">
			<div class="circle-clipper left">
				<div class="circle"></div>
			</div>
			<div class="gap-patch">
				<div class="circle"></div>
			</div>
			<div class="circle-clipper right">
				<div class="circle"></div>
			</div>
		</div>
	</div>
</div>

<?php require_once "../app/Views/Part/downfile.php" ?>

<script>
		particlesJS("particles-js", 
		{"particles":{
			 "number":{"value":260,"density":{"enable":true,"value_area":800}},
			 "color":{"value":"#eceff1"},
			 "shape":{
			 	"type":"circle","stroke":{"width":0,"color":"#000000"},
			    "polygon":{"nb_sides":5},
			 	"image":{"src":"img/github.svg","width":100,"height":100}
			  },
			 "opacity":{
			 	"value":1,
			 	"random":true,
			 	"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}
			 },
			 "size":{"value":3,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},
			 "line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},
			 "move":{"enable":true,"speed":1,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":600}}
		 },
		 "interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"bubble"},"onclick":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},"repulse":{"distance":400,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},
		 "retina_detect":true});
	</script>
