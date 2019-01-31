<?php
	 
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "hackathon";
	// Create connection
	


	$conn = new mysqli($hostname, $username, $password, $dbname);
		if($conn->connect_error){
			echo "NOT connected";
					die("connection failed:" .$conn->connect_error);}
					


				
	$usernameErr = $passwordErr = "";
	$username = $password= "";
	
	if(isset($_POST["login"]))
	{
		 	
	    if ($_SERVER["REQUEST_METHOD"] == "POST")
	    {
	       if (empty($_POST["username"]))
		   {
				$usernameErr = "Username is required";
		   } 
  
           if (empty($_POST["password"])) 
		   {
			   $passwordErr = "Password is required";
		   }
	    
			else if(!empty($_POST["username"]) && !empty($_POST["password"]))
			{
				$user=$_POST['username'];  
				$pass=$_POST['password'];
				$psss=md5($pass);
	
				$query=mysqli_query($conn,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."' LIMIT 1");  
				$numrows=mysqli_num_rows($query);  
				if($numrows!=0)  
				{  
					session_start();
					$_SESSION['username']=$user;
					$_SESSION['email']=$email;

					/* Redirect browser */  
					header("Location: front.php");  
				}  
			
				else
				{
					$usernameErr ="Username/Password not Valid";
				}
			}
		
		}
	}



?>


<!DOCTYPE html>
<html lang="en">
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
	
* {
    box-sizing: border-box;
}

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
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 10px;
    text-align: center;
    color:black;
}

.header h1 {
    font-size: 40px;
}


/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: center;
    width: 100%;
	
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: lightblue;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.error {
	font-size:12px;
	color: #FF0000;
	}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}


</style>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="front.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Register</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Take an Appointment</a>
    <a href="medlist.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Medicine List</a>
  </div>



  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Login</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-padding-large">Take an Appointment</a>
    <a href="medlist.php" class="w3-bar-item w3-button w3-padding-large">Medicine List</a>
  </div>
</div>



<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Login</h1>
	  <div class="row" ">
  <div class="leftcolumn" >
    <div class="card">
	<h3>Login Here!</h3>
	<div class="card">
	 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	 <span class="error">* <?php echo $usernameErr;?></span>
	 <label for="Username">Username</label>
	 <input type="text" name="username" placeholder="Username">
	 
	 <span class="error">* <?php echo $passwordErr;?></span>
	 <label for="Password">Password</label>
	 <input type="Password" name="password" placeholder="Password">
	 
	 <input type="submit" value="login" name="login" >
	 <a href="register.php"><strong>New User !!Click here to Register!"</a>
	 </form>
	  </div>
  </div>
  </div>
</div>
    </div>

  </div>

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

	

