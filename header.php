<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
 function Index(){
   window.open("addtocart.php");
   }
   function addtocart(){
   window.open("addtocart.php");
   }
 
   </script>

 
</head>

<body>
<table width="100%" height="30%" cellpadding="5">
<tr bgcolor="#00CCFF" height="30%" width="100%" >
<td>
<marquee> <font color="#FFFFFF">WELCOME TO OUR STORE</font> </marquee>
</td>
</tr>
</table>
<table width="100%" cellspacing="0" >
  <tr>
     <td align="center" width="40%"><h1><font face="Lucida Sans Unicode, Lucida Grande, sans-serif"><font color="#FF0000">G</font><font color="#000000">rocery</font><font color="#FF0000"> S</font><font color="#000000">hoppy</font></font></h1></td>
     <td align="center">
     <table width="100%">
       <tr>
         <td><a href="#" style="text-decoration:none"><font color="#000000">Track Order</font></a></td>
         <td><a>| &nbsp; 0012345678 </a></td>
          <td><a href="Login.php" style="text-decoration:none"><font color="#000000"> | &nbsp;  LogIN </font></a></td>
      
           <td><a href="logout.php" style="text-decoration:none"> <font color="#000000">| &nbsp; LogOUT&nbsp;</font></a>
  </td>
     </tr>
     </table>
     </td>
     </tr>
     <tr>
           <td align="center"><img src="img/logo2.png" width="25%" height="90%"/></td>
           <td align="center" width="80%">
           <form name="f1" action="#" method="post">
           <table width="80%">
             <tr height="40">
               <td align="right">
                 <input type="text" name="n1" align="middle" placeholder="How can I help you?" size="60%" /></td>
               <td align="left">
                 &nbsp; &nbsp;<input type="image" align="left" src="img/images.jpg" width="30" height="25" onclick="addtocart()"></td>
               <td align="right">
                 <input type="image" align="right" src="img/shopping-cart-icon-26.jpg" width="40" height="40" onclick="addtocart()"></td>
             </tr>
           </table>
           </form>
           </td>
     </tr>
   </table>  
</body>
</html>