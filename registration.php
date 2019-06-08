<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/matches.css">
    <link rel="stylesheet" type="text/css" href="styles/signup.css">


    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <title>Registration</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="formcss/style.css">
    <style>
    .success{
      padding-left:200px;
      padding-top:200px;
    }
    </style>
</head>
<body>
  <div class="super_container">
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
  											<li><a href="matches.php">Matches</a></li>
  										</ul>
  									</div>
  									<div class="logo_container text-center"><div class="trans_400"><a href="#"><img src="images/logo3.png" alt=""></a></div></div>
  									<div>
  										<ul class="d-flex flex-row align-items-start justify-content-start">
  											<li class="active"><a href="signup.html">SignUp</a></li>
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

<div class="success">
  <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'registration');

         if(! $conn ) {
            die('Could not connect: ' . mysqli_error($conn));
         }
         if(isset($_POST['signup'])){
           $name=$_POST['name'];
           $email=$_POST['email'];
           $pass=$_POST['pass'];
           $repass=$_POST['re_pass'];


           if($name==''||$email==''||$pass==''||$repass==''){
             echo "<script>alert('Please fill all the fields')</script>";
           }else if($pass!=$repass){
             echo "<script>alert('Password didn't match.Try again')</script>";
           }else{
           $query="insert into user values('$name','$email','$pass')";

           if(mysqli_query($conn,$query)){
             echo "<h3>Registration Successful</h3>";
           }
         }
}
         mysqli_close($conn);
      ?>
</div>
</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="formjs/main.js"></script>
</body>
</html>
