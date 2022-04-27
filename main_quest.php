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
	<title>AlumTrack</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto&display=swap" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!-- Datepicker from: https://gijgo.com/datepicker/example/bootstrap-4 -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	
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

<div class="container-fluid1 text-white ">
	<section id="quest" class="text-center align-middle bg-transparent mt-3">
			<div class="margin-top mx-auto-md spacer3" style="font-size:3vh; padding-right: 4vw;">
			<p>Tell us about yourself!</p>
	
	</div>
	</section>
<!-- name section -->

<form action="form_submit.php" method="post"> <!-- working -->
	<div class="box1 flex-box justify-content-center">
		<div class="box2 d-flex-row justify-content-center">
			<div class="p-1 ml-1">Name</div>
				<div class="spacer">
  				<div class="form-row">
   					 <div class="col col2">
      					<input type="text" name="first" class="form-control" placeholder="First">
  					 </div>
    				<div class="col">
     				 	<input type="text" name="mi" class="form-control " placeholder="M.I.">
  					</div>
  					<div class="col col1">
  						<input type="text" name="last" class="form-control" placeholder="Last">
  					</div>
 				</div>

				</div>	
		</div>
	</div>

		<!-- birthday selector -->
		<div class="box3 d-flex-row justify-content-center">
			<div class="p-1 ml-1">Date of birth</div>
				<div class="spacer">
  					<div class="form-row">
   					<input id="datepicker" name="datepicker" width="225" />
    					<script>
  					      $('#datepicker').datepicker({
   					      uiLibrary: 'bootstrap4'
     					  });
   						</script>
 					</div>
				</div>	
		</div>

		<!-- alma matter section -->
		<div class="box3 d-flex-row justify-content-center">
			<div class="p-1 ml-1">Gender</div>
				<div class="spacer">
				<div class="gender" style="width:200px;">			
 						<select name="gender_selector" id="gender">
    					<option value="Female">Female</option>
    					<option value="Male">Male</option>
    					<option value="Transgender">Transgender</option>
    					<option value="Non-binary">Non-binary</option>
    					<option value="Genderqueer">Genderqueer</option>
    					<option value="Gender fluid">Gender fluid</option>
    					<option value="Gender neutral">Gender neutral</option>
    					<option value="Prefer not to say">Prefer not to say</option>
  						</select>
					</div> 
        	    </div>
            	</div>

      	<div class="box1 flex-box justify-content-center">
		<div class="box4 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
			<div class="p-1 ml-1">Skills</div>
				<div class="spacer">
  				<div class="form-row">
   					 <div class="col col1">
      					<input type="text" name="skill_1" class="form-control" placeholder="skill 1">
  					 </div>
    				<div class="col col1">
     				 	<input type="text" name="skill_2" class="form-control " placeholder="skill 2">
  					</div>
  					<div class="col col1">
  						<input type="text" name="skill_3" class="form-control" placeholder="skill 3">
  					</div>
  					<div class="col col1">
  						<input type="text" name="skill_4" class="form-control" placeholder="skill 4">
  					</div>
  				</div>
				</div>	
		</div>
	</div>

		<div class="box1 flex-box justify-content-center">
		<div class="box3 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
			<div class="p-1 ml-1">Bio</div>
				<div class="spacer">
  				<div class="form-row">
   					 <div class="col col1">
      					<input type="text" name="bio" class="form-control" maxlength="100" placeholder="max 100 characters">
  					 </div>
    			</div>
				</div>	
		</div></div>

		<div class="box1 flex-box justify-content-center">
			<div class="box3 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
				<div class="p-1 ml-1">Mobile number</div>
					<div class="spacer">
  						<div class="form-row">
   						<div class="col col1">
      						<input type="tel" name="phone_num" class="form-control" pattern="[0-9]{11}" placeholder="enter 11 digit number"> 
  					 	</div>
    					</div>
					</div>	
			</div>
		</div>


			<section id="quest" class="text-center align-middle bg-transparent mt-3">
			<div class="margin-top mx-auto-md spacer3" style="font-size:3vh; padding-right: 4vw;">
			<p>Educational Profile</p>
	
			</div>
			</section>

		<div class="box1 flex-box justify-content-center">
		<div class="box3 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
			<div class="p-1 ml-1">Current School</div>
				<div class="spacer">			
 						<select name="current_school" id="current_school">
    					<option value="La Concepcion College">La Concepcion College</option>
    					</select>
        	    </div>
        </div>
		</div>


		<div class="box1 flex-box justify-content-center">
			<div class="box3 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
				<div class="p-1 ml-1">Current Educational Attainment</div>
					<div class="spacer">			
 						<select name="cur_educ_at" id="cur_educ_at"> <!-- same name and id, this might be a issue -->
    					<option value="Elemenatry">Elementary</option>
    					<option value="Junior high school">Junior high school</option>
    					<option value="Senior high school">Senior high school</option>
    					<option value="College">College</option>
    					<option value="Master's or doctorate degree">Master's or doctorate degree</option>
    					</select>
        			</div>
        	</div>
		</div>

		<div class="box1 flex-box justify-content-center">
			<div class="box3 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
				<div class="p-1 ml-1">Course/Strand</div>
				<div class="spacer">			
 						<select name="cor_str" id="cor_str">
    					<option value="BS information system">BS information system</option>
    					<option value="ICT">ICT</option>
    					<option value="STEM">STEM</option>
    					<option value="HUMMS">HUMMS</option>
    					<option value="BS information technology">BS information technology</option>
    					</select> 
        	    </div>
        	</div>
        </div>

		<div class="box1 flex-box justify-content-center">
			<div class="box3 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
			<div class="p-1 ml-1">Specialization</div>
				<div class="spacer">			
 						<select name="specialization" id="specialization">
    					<option value="EIM">EIM</option>
    					<option value="ICT">ICT</option>
    					<option value="CHS">CHS</option>
    					<option value="Dress making">Dress making</option>
    					<option value="Technical drafting">Technical drafting</option>
    					</select>
        	    </div>
            </div>
		</div>

		<div class="box1 flex-box justify-content-center">
		<div class="box4 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
			<div class="p-1 ml-1">Learning style</div>
				<div class="spacer"></div>
				<div class="container">
    					<label class="radio-inline">
      						<input type="radio" name="ls" value="visual">Visual
   						</label>
    					<label class="radio-inline">
      						<input type="radio" name="ls" value="auditory">Auditory
    					</label>
    					<label class="radio-inline">
     						<input type="radio" name="ls" value="read/writing">Reading/writing
    					</label>
    					<label class="radio-inline">
      						<input type="radio" name="ls" value="kinesthetic">Kinesthetic
    					</label>
    					</select>
				</div>
		</div>
		</div>

		

	<section id="quest1" class="text-center align-middle bg-transparent mt-3">
		<div class="margin-top mx-auto-md spacer3" style="font-size:3vh; padding-right: 4vw;">
			<p>Work Profile</p>
	
		</div>
	</section>
		<div class="box1 flex-box justify-content-center">
			<div class="box3 d-flex-row justify-content-center"> <!-- box3 for little top spacing -->
				<div class="p-1 ml-1">Current work</div>
					<div class="spacer">
  						<div class="form-row">
   					 	<div class="col col1">
      						<input type="text" name="current_work" class="form-control" maxlength="100" placeholder="max 100 characters">
  					 	</div>
    					</div>

					</div>	
			</div>
		</div>
			
		<div class="spacer"></div>
			<div class="col-md-12 text-center text-center align-middle bg-transparent mt-3">
				<div class="margin-top mx-auto-md spacer3" style="font-size:3vh; padding-right: 4vw;">
				<input type="submit" value="Submit" class="btn btn-primary btn-size">
				</div>
			</div>
	</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
