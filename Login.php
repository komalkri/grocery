<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LOGIN FORM</title>
<link rel="stylesheet" href="css/style1.css" type="text/css" />


	   
</head>


<body background="img/banner4.jpg" backgound-size:cover;>
<br>
<center>
<h1 align="center"> <font style="bold" color="#FFFFFF" size="+4"> LOGIN FORM</font> </h1>
<form name="f1" method="post" action="">
<table align="center">
<tr>
<td align="center"><font color="#fff" size="+1"> Username</font></td>
<td> <input type="text" name="n1"  placeholder="Enter Username" required /></td> <br></td></tr>
<tr>
<td align="center"><font color="#FFFFFF" size="+1"> Password</font></td> 
<td><input type = "password" name="n2" placeholder="Password" required /></td></tr>
<tr><td>
<input type = "submit" align="middle" name="s1" value="LOGIN"></tr></td>
<tr>
<td><a href="reg.php"><font color:"#fff">Sign Up Here></font></a></td>
<td align="right"><a href="changepswd.php">?Forgot Password</a></td>
</tr>
</table>
<?php
   include 'config.php';
   if(isset($_POST['s1'])){
  $user=$_POST['n1'];
  $pwd=$_POST['n2'];
   $q1="select * from login_tab where e_mailid='$user' and pswd='$pwd'";
   $list=mysql_query($q1);
   $f=mysql_num_rows($list);
   if($f<1)
    { 
      echo "Wrong password plz try again";
	}
	 else{
         $_SESSION['log']=$user;
          include 'welcome.php';
         }
   }
  ?>		 
</form>
</body>		  

	 
	 
</body>
</html>
