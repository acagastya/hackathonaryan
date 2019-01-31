<?php
	$foo = "bar";
	$con=mysqli_connect("localhost","root","root","hackathon");
	// Check connection
		if (mysqli_connect_errno())
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		// Perform queries 
		//echo($_POST['dname']);
		
	
	
						
			
?>
<!DOCTYPE html>
<html lang="en">
<title>Medicine List</title>
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
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="front.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Take an Appointment</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Medicine List</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large">Register</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-padding-large">Take an Appointment</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Medicine List</a>
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
      <h1>Medicine List</h1>
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	 
	 
	 <label for="dname">Enter the disease name:</label><br>
	 <input type="text" name="dname" placeholder="abc" autofocus value="Fever"><br><br>
	 	 
	 <input type="submit" id="searchmed" name="searchmed" class="btn btn-default">
		
	 </form>
	 
	 	<?php
			$disease=$_POST['dname'];

		$newVar = mysqli_query($con,"SELECT * FROM medlist where Disease='".$disease."'");
		if ($newVar->num_rows > 0)
				{
					echo '<form class="form-group" method="POST">';
					while($row = $newVar->fetch_assoc()) {
					
					echo
						'
							<strong>Name :</strong>'.$row["Name"].'
							<strong>Registration No. :</strong>'.$row["RegNo."].'
							<strong>Disease :</strong>'.$row["Disease"].'
							<strong>Remark :</strong>'.$row["Remark"].'
							<br>';
					
					}
				}
				else
				{
					echo "<h3>Sorry,No result found!!</h3>";
				}
				
	mysqli_close($con);
  
  ?>	  
	 
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i><br>
	  
	  
    </div>
  </div>

  </div>
  

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