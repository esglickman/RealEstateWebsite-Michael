<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Real Estate - Contact Page</title>
    <!-- bootstap html and cc elemets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--links my css page -->
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <!--Allows me to use JQuery -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Allows me to use Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">

</head>
<body>
<?php
if(isset($_POST["submit1"])){
	$link=mysqli_connect("localhost","root","", "finalProject");


	mysqli_select_db($link,"finalProject");
	$count=0;
	$res=mysqli_query($link, "SELECT * from contactForm where email='$_POST[email]'");
	$count=mysqli_num_rows($res);

	echo $count;

	if($count>0){
?>
	<script type="text/javascript">
		alert("This email already exists, please choose another");
	</script>

<?php
	} else {
		
		mysqli_query($link, "INSERT into contactForm values('','$_POST[firstName]','$_POST[lastName]','$_POST[email]', '$_POST[phone]','$_POST[message]')");
?>
	<script type="text/javascript">
		alert("Message sent successfully.");
		// window.location="login.php";

	</script>
<?php
	}
}
?>



	<div class="jumbotronContact">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
	<!-- PUT A LOGO HERE -->
				<img class='remaxLogo' src="assets/images/remaxlogo.gif">
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="navButtons"><a href="../index.html">Home</a></li>
		        <li class="navButtons"><a href="about.html">About</a></li>
		        <li class="navButtons"><a href="featured.html">Featured</a></li>
		        <li class="navButtons"><a href="contact.php">Contact Me</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>


	</div>
<br>
	<div id="greyBackground">
		<div class="container">

			<div class="row"></div>

			<div class="row">
				
				<div class="col-sm-1"></div>
				
				<div class="col-sm-10" id="whiteBackground">
					
					<form class="form-horizontal" name="form1" action="" method="post">
						<fieldset>

						<!-- Form Name -->
							<legend>Contact Me</legend>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">First Name</label>  
							  <div class="col-md-4">
							  <input id="textinput" name="firstName" type="text" placeholder="First Name" class="form-control input-md"> 
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
							  <div class="col-md-4">
							  <input id="textinput" name="lastName" type="text" placeholder="Last Name" class="form-control input-md">  
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Email Address</label>  
							  <div class="col-md-4">
							  <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md" required pattern="^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
							  </div>
							</div>

							<!-- Text input-->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textinput">Phone Number</label>  
							  <div class="col-md-4">
							  <input id="textinput" name="phone" type="text" placeholder="Phone Number" class="form-control input-md"> 
							  </div>
							</div>

							<!-- Textarea -->
							<div class="form-group">
							  <label class="col-md-4 control-label" for="textarea">Message</label>
							  <div class="col-md-4">                     
							    <textarea class="form-control" id="textarea" name="message"></textarea>

								    <button id="singlebutton" name="submit1" class="btn btn-primary">Submit</button>
								  
							  </div>
							</div>

						</fieldset>
					</form>

				</div>

				<div class="col-sm-1"></div>

			</div>
			
		</div>
	</div>	

<!-- footer -->

<div id="footer">
    <div class="container">
        <div class="row">
            <h3 class="footertext"> </h3>
            <br>
              <div class="col-md-4">
                <center>
                  
                  <br>
                  <h4 class="footertext">Michael Glickman Reality</h4>
                  <p class="footertext">Top Luxury Real Estate Agent<br> For Palm Beach County.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <br>
                  <h4 class="footertext">Our clients are saying...</h4>
                  <p class="footertext">"I cannot believe within 3 months I was able to sell my home and move into a new home. I appreciate all that you've done and how relentless you were. Thank you so much for looking out for me as only you could!" - Mindy Ebert<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <!-- <img src="assets/images/facebook.png" class="img-circle" alt="..."> -->
                  <br>
                  <h4 class="footertext">Designer/Developer</h4>
                  <p class="footertext">This pretty site and the copy it holds are all thanks to this guy: Evan Glickman<br>UCF Coding Bootcamp May 2017 Cohort
                </center>
              </div>
            </div>
            <div class="row">
            <p><center><a href="#">Remax Reality Group</a> <p class="footertext">Copyright 2017 &copy;</p></center></p>
        </div>
    </div>
</div>

</body>
</html>