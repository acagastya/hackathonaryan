<!DOCTYPE html>
<html lang="en">
<title>Front Page</title>
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
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="login1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Take an Appointment</a>
    <a href="medlist.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Medicine List</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="login1.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-padding-large">Take an Appointment</a>
    <a href="medlist.php" class="w3-bar-item w3-button w3-padding-large">Medicine List</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  
</header>



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
