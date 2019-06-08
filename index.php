<!DOCTYPE html>
<html lang="en">
<head>
<title>Cricket Score</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sports Team template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/index.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Header Content -->
		<div class="header_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="main_nav_container_outer d-flex flex-row align-items-end justify-content-center trans_400">
							<nav class="main_nav">
								<div class="main_nav_container d-flex flex-row align-items-center justify-content-lg-start justify-content-center">
									<div>

										<ul class="d-flex flex-row align-items-start justify-content-end">
											<li class="active"><a href="index.html">Home</a></li>
											<li><a href="matches.php">Matches</a></li>
										</ul>
									</div>
									<div class="logo_container text-center"><div class="trans_400"><a href="#"><img src="images/logo3.png" alt=""></a></div></div>
									<div>
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="signup.html">SignUp</a></li>
											<li><a href="login.html">Login</a></li>
										</ul>
									</div>
								</div>
							</nav>
							<div class="hamburger">
								<i class="fa fa-bars trans_200"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</header>

	<!-- Menu -->

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slide -->
				<div class="home_slide">
					<div class="background_image" style="background-image:url(images/cricket1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-10">
									<div class="home_content" data-animation-in="zoomInDown" data-animation-out="animate-out fadeOut">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>

		</div>
	</div>



	<!-- Results -->
	<div class="scoreclass">
		<div class="container">
			<div class="heading"><h1>Score</h1></div>
	<div class="card-deck">

	  <div class="card">
			<?php

					 $cricketMatchesTxt = file_get_contents('https://cricapi.com/api/matches?apikey=3aUh7pw4GWO9ZZpCLpRDfjT3rhn2');	// change with your API key
					 $cricketMatches = json_decode($cricketMatchesTxt);


						 foreach($cricketMatches->matches as $item) {

				?>
	    <div class="card-body">
	      <h5 class="card-title"><?php $first="team-1"; $second="team-2"; echo ($item->$first); echo " v/s "; echo ($item->$second); ?></h5>
	      <p class="card-text"><?php echo($item->winner_team); echo " Won "; ?></p>
				<?php break; } ?>

	    </div>
	  </div>
	  <div class="card">
			<?php

	         $cricketMatchesTxt = file_get_contents('https://cricapi.com/api/matchCalendar?apikey=3aUh7pw4GWO9ZZpCLpRDfjT3rhn2');	// change with your API key
	         $cricketMatches = json_decode($cricketMatchesTxt);


	           foreach($cricketMatches->data as $item) {
	           $id=$item->unique_id;?>

						 <div class="card-body">
			 	      <?php
							if(is_numeric($id)){
		           $cricketMatchesTxt1 = file_get_contents('http://cricapi.com/api/cricketScore?apikey=3aUh7pw4GWO9ZZpCLpRDfjT3rhn2&unique_id='.$id);	// change with your API key
		           $cricketMatches1 = json_decode($cricketMatchesTxt1);?></h5>



							 <h5 class="card-title"><?php echo ($item->name); ?>
	      <p class="card-text"><?php echo($cricketMatches1->score); ?></p>
	      <p class="card-text"><small class="text-muted"><?php echo ($item->date); break; ?></small></p>
			<?php } ?>
		<?php } ?>
	    </div>
	  </div>
	</div>
</div>
</div>



</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
