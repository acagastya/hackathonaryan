<?php
	
	$hostname="localhost";
	$username="root";
	$password="root";
	$dbname="project";
	
	$conn= new mysqli( $hostname , $username , $password , $dbname);
	if($conn->connect_error)
	{
		echo "connection failed";
			die("connected failed:" .$conn->connect_error);}
			
			session_start();
			
			$username=$_SESSION['username'];
			$name=$_SESSION['name'];
			$semail=$_SESSION['email'];
	
	
	?>



<!DOCTYPE html>
<html lang="en">
<title>Appointment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="front.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-padding-large w3-white">Take an Appointment</a>
    <a href="medlist.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Medicine List</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large">Register</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Take an Appointment</a>
    <a href="medlist.php" class="w3-bar-item w3-button w3-padding-large">Medicine List</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">WELCOME<h1>
  <p class="w3-xlarge">How may we help you today?</p>
  <a href="emergency.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Emergency</button></a>

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Enter details for appointment</h1>
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	 <label for="Time">Time</label><br>
	 <input type="time" name="aptime" id="aptime" min="9:00" max="18:00" required>
	 <span class="note"><strong>Office hours are 9am to 6pm</strong></span><br>
	 
	 <label for="Date">Date</label><br>
	 <input type="date" name="apdate" id="apdate"><br>
	 
	 <label for="drname">Dcotor Name</label><br>
	 <input type="text" name="drname" placeholder="Doctor Name"><br>
	 
	 <label for="drname">Remark</label><br>
	 <input type="text" name="remark" placeholder="Remark"><br>
	 
	 <label for="dremail">Dcotor's Email</label><br>
	 <input type="email" name="dremail" placeholder="Dcotor@email.com"><br>
	 
	 <input type="submit" value="sendmail" name="sendmail" >
	 <input type="hidden" name="button_pressed" value="1" />
		
	 </form>
	 
<?php

if(isset($_POST['button_pressed']))
{
    $to      = $_POST['dremail'];
    $subject = 'Need Appointment';
    $message = 'Sir! Please provide me an appointment at' .$_POST['aptime'] .'on' .$_POST['apdate'];
	$header = 'From: example@gmail.com' . "\r\n" .
    'Reply-To: example@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	

    mail($to, $subject, $message, $header);

    echo 'Email Sent.';
}

?>

	</div>
    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!--Removed Second Grid -->


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: Never Give Up</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.intagram.com" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com" target="_blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.com" target="_blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
 </div>

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
