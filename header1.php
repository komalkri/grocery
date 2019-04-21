<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.open-button {
  background-color: #FFF;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  
  width: 125px;
}
.track-button {
  background-color: #FFF;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
 
  width: 150px;
}
.no-button {
  background-color: #FFF;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
 
  width: 125px;
}
.logout-button {
  background-color: #FFF;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
 
  width: 125px;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position:fixed;
  top:100px;
  right:500px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  overflow:auto;
  background-color:rgb(0,0,0);
  background-color:rgba(0,0,0,0.4);
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.sty
{
	width:100%;
	height:30px;
	background-color:#0CF;
	color:white;
	border:none;
}


/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "?";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "?";
}


</style>
</head>
<body>
<table width="100%" align="center">
<tr><td width="100%">
<div class="sty" id="style">
<marquee> <font color="#FFFFFF">WELCOME TO OUR STORE</font> </marquee>
</div>
</td></tr>
<tr>
<td>
  <table align="center" width="100%">
   <tr>
    <td width="40%" align="center">
      <h1><font face="Lucida Sans Unicode, Lucida Grande, sans-serif"><font color="#FF0000">G</font><font color="#000000">rocery</font>
	  <font color="#FF0000"> S</font><font color="#000000">hoppy</font></font></h1>
    </td>
    <td width="60%">
      <table>
      <tr><td><button class="track-button" onClick="" style="font-size:16px">Track Order</button></td>
      <td><button class="no-button" onClick="" style="font-size:16px">|&nbsp;&nbsp;&nbsp;0012345678</button></td><td><button class="open-button" onClick="openForm()" style="font-size:16px">|&nbsp;&nbsp;&nbsp;Login</button></td><td><button class="logout-button" onClick="" style="font-size:16px">|&nbsp;&nbsp;&nbsp;Logout</button></td></tr>
      </table>
    </td>
   </tr>
   <tr>
     <td align="center">
        <img src="img/logo2.png" width="100px" style="height:100px">
     </td>
     <td>
      <form name="f1" action="display.php" method="post">
           <table width="100%">
             <tr height="40">
               <td align="right">
                 <input type="text" name="n1" align="middle" placeholder="How can I help you?" size="60%" /></td>
               <td align="left">
                 <input type="image" align="left" src="img/images.jpg" width="30" height="25"></td>
               <td align="right">
                 <input type="image" align="right" src="img/shopping-cart-icon-26.jpg" width="40" height="40"></td>
             </tr>
           </table>
      </form>  
     </td>
    </tr>
   </table>
</td></tr></table>
<div class="form-popup" id="myForm">
  <form action="/addtocart.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Username</b></label>
    <input type="text"  size="15"placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

    <button type="submit" class="btn" name="s1">Login</button>
    <button onClick="document.getElementById('id01').style.display='block'"  class="btn" type="button">Sign Up</button>
      <button type="button" class="btn cancel" onClick="closeForm()">Close</button>
	
	
	<?php
   include 'config.php';
   if(isset($_POST['s1'])){
  $user=$_POST['name'];
  $pwd=$_POST['psw'];
   $q1="select * from login_tab where user_name='$user' and password='$pwd'";
   $list=mysql_query($q1);
   $f=mysql_num_rows($list);
   if($f<1)
    { 
      echo "Wrong password plz try again";
	}
	 else{
         $_SESSION['log']=$user;
          include 'addtocart.php';
         }
   }
  ?>		 

  </form>
</div>
				

<div id="id01" class="modal">
  <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="home.php">
    <div class="container">
      <h1 align="left">Sign Up</h1>
      <p align="left">Please fill in this form to create an account.</p>
      <hr>
	  <label for="username"><b>Username</b></label>
      <input type="text" size="10" placeholder="Enter Username" name="uname" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
	 
	  <label for="mobile"><b>Mobile No</b></label>
      <input type="text" size="10" placeholder="Mobile No" name="mno" required>


      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="psw-repeat" required>
	  
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" align="left"> Remember me
     </label>

      <p >By creating an account you agree to our </font><a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit"  name="s2" class="signupbtn" onClick="return Validate()">Sign Up</button>
      </div>
    </div>
	<?php
  include 'config.php';
  if(isset($_POST['s2'])){
	  
  $fn=$_POST['uname'];
  $ln=$_POST['psw'];
  $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
  $pwd=$_POST['mno'];
  $d= mysql_query("insert into login_table(user_name,password) Values 
   ('$fn','$ln')");
   if(!$d)
   {
	    die('could not update:'.mysql_error());
   }
   echo "house";
   
  } 
?>

  </form>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
  
    modal.style.display = "none";
	
  }
}
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
function Validate() {
   var password=document.getElementById("psw").value;
   var confirmpassword=document.getElementById("psw-repeat").value;
   if(password != confirmpassword) {
    alert("Passwords do not match.");
	return false;
}
  return true;
 } 

</script>

</body>
</html>
