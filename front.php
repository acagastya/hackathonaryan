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
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register</a>
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
  <h1 class="w3-margin w3-jumbo">WELCOME TO E-CLINIC<h1>
  <p class="w3-xlarge">How may we help you today?</p>
  <a href="emergency.php"><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Emergency</button></a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>E-clinic</h1>
      <h5 class="w3-padding-32">Here we help people to set appointment with doctors and also provides them with suggestion and suggest them medicines based on perticular input.</h5>

      <p class="w3-text-grey">The setting an appointment feature is only available to registered users while searching medicines is available to everyone without any login.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>About Us</h1>
      <h5 class="w3-padding-32">We are Students of The National Institute of Engineering, we are trying to develop a website which can help old and handicapped people in time of emergency.</h5>

      <p class="w3-text-grey">We are developing this project as part of a hackathon and claim no copywrite of any image , video or media file. Kindly excuse us, we are just students and mean no disrespect or harm to anyone. Thank You.</p>
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
