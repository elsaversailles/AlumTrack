<?php
session_start();
if(!isset($_SESSION['loggedin'])){
	header("Location:id_number.php");
	exit;
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to AlumTrack</title>
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
<div class="container-fluid">
	<div class="row">
		<div class="col">
		<nav class="navbar navbar-dark navbar-expand-md bg-transparent sticky-top">
     	   <a class="navbar-brand" href="#"> <!-- for pasting change to ./index.html -->
  		  <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    		AlumTrack</a>
		</nav>
</div>
		<div class="container-fluid col">
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
                <a class="nav-link" href="./about.html">About</a>
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
	


<section id="main" class="text-center align-middle bg-transparent mt-3">
	<div class="text-white"> <!-- if you add container-fluid itll go -->
		<div class="col">
			<div class="box7">
		<img src="./images/profile.png" class="float-left img-fluid rounded-circle img-thumbnail" style="max-width:75px; margin-top: 10px; margin-right: 20px;">
		<p class="float-left align-middle text-center" style="padding-bottom: 50px;"> <font size="5"><?php echo $_POST["first"]; ?> <?php echo $_POST["mi"]; ?> <?php echo $_POST["last"]; ?></font></p> 
	</div>
</div>
</section>




<section id="2nd">
<div class="box8 text-white text-center col">
	<!-- <div class="col"> -->

		<p class="mx-auto"> <?php echo $_POST["bio"]; ?></p>

</div>
</section>



<section id="bday">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/2985632.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
	<p class="float-left align-middle text-justify" style=" margin-left: 0.5vh;"> <font size="3"><?php echo $_POST["datepicker"]; ?> </font></p>
</div>
</div>	
</section>


</section>


<section id="gender">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/2512388.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify" style=" margin-left: 0.5vh;"> <font size="3"><?php echo $_POST["gender_selector"]; ?></font></p>
	</div>
</div>

</section>
		
	
		<div class="box9 flex-box justify-content-center text-white">
		<div class="d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
			<img src="./images/2091457.png" class="float-left img-fluid " style="max-width:55px; margin-top: 10px; margin-right: 5vw;">
				<div class="spacer">
  				<div class="form-row">
   					 <div class="col col1">
      					<p><?php echo $_POST["skill_1"]; ?></p>
  					 </div>
    				<div class="col col1">
     				 	<p><?php echo $_POST["skill_2"]; ?></p>
  					</div>
  					<div class="col col1">
  						<p><?php echo $_POST["skill_3"]; ?></p>
  					</div>
  					<div class="col col1">
  						<p><?php echo $_POST["skill_4"]; ?></p>
  					</div>
  				</div>
				</div>	
		</div>
	</div>

	<section id="cur_sch">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/1048947 (1).png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify"> <font size="3"><?php echo $_POST["current_school"]; ?></font></p>
	</div>
</div>

</section>

<section id="cur_sect">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/4207247.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify" style="word-wrap: break-word;"> <font size="3"><?php echo $_POST["cur_educ_at"]; ?></font></p>
	</div>
</div>

</section>
		
<section id="cur_sect">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/profile.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify"> <font size="3"><?php echo $_POST["cor_str"]; ?></font></p>
	</div>
</div>

</section>

<section id="cur_sect">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/1738746.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify"> <font size="3"><?php echo $_POST["specialization"]; ?></font></p>
	</div>
</div>

</section>

<section id="cur_sect">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/4616734.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify"> <font size="3"><?php echo $_POST["ls"]; ?></font></p>
	</div>
</div>

</section>

<section id="cur_sect">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/3020657.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify"> <font size="3"><?php echo $_POST["phone_num"]; ?></font></p>
	</div>
</div>

</section>

<section id="cur_work">
	<div class="box8 text-white">
	<div class="col">
		<img src="./images/3281289.png" class="float-left img-fluid " style="max-width:65px; margin-top: 10px; margin-right: 25vw;">
		<p class="float-left align-middle text-justify"> <font size="3"><?php echo $_POST["current_work"]; ?></font></p>
	</div>
</div>

</section>

<div class="spacer">
</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
