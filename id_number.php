<?php
	session_start(); //keep it here for now


$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'usrdb'; 

//$dbcon = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname); // eto yung possible issue
$dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

	
if (!$dbcon) { // at dito rin 
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// move na tayo sa next testing


if (isset($_POST['idnumber']) && isset($_POST['password'])) { // eto pa isang error imbis na pass, password dapatt dahil dun sa html mo password nakalagay
/// okay move na ulit sa next testing

  $user = mysqli_real_escape_string($dbcon, $_POST['idnumber']); // eto pa next na issue, dapat same yung nasa $_POST mo
  $pass = mysqli_real_escape_string($dbcon, $_POST['password']);
 
  $result = mysqli_query($dbcon, "SELECT * FROM `loginform` WHERE `User` = ".$user." AND `Pass` = '".$pass."'"); // ang ginawa dito, nialgay na yung galing mismo sa form
  // debug muna ulit bago ituloy

  if (mysqli_num_rows($result) > 0) {
  	$_SESSION['loggedin'] = TRUE;
    //echo 'success to';
  include 'onboarding.html';
    //header('Location: main_quest.php'); //this function throws err500
    exit();
  }
  else {
    // login error
    header("Location: id_number_retry.php");
    exit();
  }
  
}

?>



<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AlumTrack | Login</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto&display=swap" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!-- external css (make this last to let all API load)-->
	<link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body>
		
<div class="container-fluid">
	<div class="row">
		<div class="col">
		<nav class="navbar navbar-dark navbar-expand-md bg-transparent sticky-top">
     	   <a class="navbar-brand" href="./index.html">
  		  <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    		AlumTrack</a>
		</nav>
</div>
		<div class="col">
		<nav class="navbar-nav navbar-expand-md navbar-dark bg-transparent sticky-top p-2">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#portfolio-nav1" >
				<span class=navbar-toggler-icon></span> <!-- toggler is hamburger menu -->
			</button>
    <div class="collapse navbar-collapse text-white" id="portfolio-nav1">
        <ul class="navbar-nav ml-auto">
            <li>
                <a class="nav-link" href="#">Help</a>
            </li>
            <li>
                <a class="nav-link" href="about.html">About</a>
            </li>
            <li>
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>   
		</nav>
		</div>
	</div>
</div>

	<div class="container-fluid text-white">
		<section id="main" class="text-center align-middle bg-transparent mt-3">  <!-- change section id main -->
			<div class="margin center mx-auto-md text-left"> <!-- left the words -->
		<form method="POST" action="#">
			<div class="form-group">
				<label for="idnumber">ID number</label>
				<input type="number" class="form-control" name="idnumber" placeholder="Enter ID number" min="1" max="99999999"><!-- issue: user can submit even the value is null -->			
			</div>
			<div class="form-group">
				<label for="password">Passphrase</label>
				<input type="password" name="password" class="form-control">
				</div>
				<div class="col-md-12 text-center">
				<input type="submit" value="Login" class="btn btn-primary btn-size">
				</div> <!-- button label shouble be "NEXT" -->
		</form>
			
		</section>
</div>
	</div>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
