 <?php
	session_start();
	 
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "hackathon";
	// Create connection
	


	$conn = new mysqli($hostname, $username, $password, $dbname);
		if($conn->connect_error){
			echo "NOT connected";
					die("connection failed:" .$conn->connect_error);}
					
					
					
					
	$usernameErr = $emailErr = $passwordErr = $phoneErr = $nameErr = $ageErr = $neighErr = $addressErr = "";
	$username = $email = $password= $phone= $name = $age = $neighphone = $address = "";
	if(isset($_POST["register"])){
					
					
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
		
		
		
		
		

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$username)) {
      $usernameErr = "Only letters ,numbers and white allowed"; 
    }
  }
  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white allowed"; 
    }
  }
  
  if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9 ]*$/",$age)) {
      $ageErr = "Only numbers are allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
	
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
      $passwordErr = "Only letters ,numbers and white space allowed"; 
    }
  }
   
	if(empty($_POST["phone"])) {
		$phoneErr = "Phone Number is Required";
	}	else{
		$phone= test_input($_POST["phone"]);
	// check if only digits are entered
	if(!preg_match("/^[0-9]*$/",$phone)) {
		$phoneErr = "Only digits are accepted";
	}
	}
	
	if(empty($_POST["neighphone"])) {
		$neighErr = "Please Enter Your neighbours Phone Number";
	}	else{
		$neighphone= test_input($_POST["neighphone"]);
	// check if only digits are entered
	if(!preg_match("/^[0-9]*$/",$neighphone)) {
		$neighErr = "Only digits are accepted";
	}
	}
	
	if (empty($_POST["address"])) {
    $addressErr = "Name is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if name only contains letters and whitespace
  }	
}


	
	if(!empty($username && $password && $email && $phone && $age && $neighphone && $address && $name)){
		$password=md5($password);
	$sqlinsert="INSERT INTO login (username, name, age, address, email, password, phone_no, n_phone) VALUES ('$username','$name','$age','$address','$email','$password','$phone','$neighphone');";
	mysqli_query($conn,$sqlinsert);
	$_SESSION['success']  = "New user successfully created!!";
			header('location: login1.php');
			echo("Success");
	}
	
 }
 ?>


<!DOCTYPE html>
<html lang="en">
<title>Register</title>
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

input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
input[type=integer], select {
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

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #211f22;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
	
}

/* Right column */
.rightcolumn {
    float: right;
    width: 30%;
	
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

/* Footer */
.footer {
    padding: 20px;
    margin-top: 20px;
	color: white;
    background-color: black;
    clear: left;
    text-align: center;
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
    <a href="front.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
    <a href="appointment.php" class="w3-bar-item w3-button w3-padding-large">Take an Appointment</a>
    <a href="medlist.php" class="w3-bar-item w3-button w3-padding-large">Medicine List</a>
  </div>
</div>



<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Register</h1>
    <div class="card">
      <h2>Registration</h2>
	  <div>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
	<span class="error">* <?php echo $usernameErr;?></span>
    <label for="Username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username">
	
	<span class="error">* <?php echo $nameErr;?></span>
    <label for="Name">Name</label>
    <input type="text" name="name" id="name" placeholder="Name">
	
	<span class="error">* <?php echo $passwordErr;?></span>
	<label for="Password">Password</label>
	<input type="Password" name="password" placeholder="Password">
	
	
	<span class="error">* <?php echo $emailErr;?></span>
	<label for="Email">Email</label>
	<input type="email" id="email" name="email" placeholder="@email.com">
	
	<span class="error">* <?php echo $phoneErr;?></span>
	<label for="Phone">Phone Number</label>
	<input type="integer" name="phone" placeholder="Phone Number" pattern=".{10,10}" required title="10 digit phone number">
	
	
	<span class="error">* <?php echo $ageErr;?></span>
    <label for="Age">Age</label>
    <input type="integer" name="age" id="age" placeholder="Age">
	
	<span class="error">* <?php echo $neighErr;?></span>
    <label for="neighphone">Neighbours Phone No.</label>
    <input type="integer" name="neighphone" placeholder="Neighbour's Phone Number" pattern=".{10,10}" required title="10 digit phone number">
	
	<span class="error">* <?php echo $addressErr;?></span>
    <label for="Address">Address</label>
    <input type="text" name="address" id="address" placeholder="Address">
  
    <input type="submit" value="register" name="register">
  </form>
</div>
    </div>
	</div>
   <div class="rightcolumn" style="background-image:url('http://wkwedding.co/wp-content/uploads/2018/02/pages-background-color-with-8-how-to-change-background-color-in-html-page-coloring-pages-of-pages-background-color-1.jpg');">

    <div class="card">
		<h2>Already an User</h2>
      <h3>Login</h3>
     <div class="card">
	 <form action="http://localhost/hackathon/login1.php">
	
	 
	 <input type="submit" value="Login" name="login" >
	 </form>
	 
	 </div>
  </div>
  </div>
</div>
</div>
    </div>

  </div>




	


</body>
</html>	

	

