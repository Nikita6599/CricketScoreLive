<!DOCTYPE html>
<html lang="en">
<head>
<title>Matches</title>
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
<link rel="stylesheet" type="text/css" href="styles/matches.css">

<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>


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
											<li><a href="index.php">Home</a></li>
											<li class="active"><a href="matches.html">Matches</a></li>
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
	<div class="block">
	</div>
	</div>

<div class="upcoming_matches">
	<h1>Upcoming Matches</h1><br><br><br>
	<?php

	$cricketMatchesTxt = file_get_contents('https://cricapi.com/api/matchCalendar?apikey=3aUh7pw4GWO9ZZpCLpRDfjT3rhn2');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->data as $item) {
?>
	<h4><?php echo($item->date);echo "<br>"; echo($item->name); echo "<br><hr>"; ?></h4>
<?php } ?>

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
