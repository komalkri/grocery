<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Grocery Shopping</title>
<style type="text/css">
 .about {
    color:#333;
    font-size:50px;
 }
</style>
</head>

<body>
<table> 
    <tr>
     <?php 
         include 'header.php';
         ?>
         </tr>
         <tr>
          <?PHP 
            include 'menutab.php';
            ?>
            </tr>
			<tr>
   <td class="menu" >
     <table align="left">
        <tr>
           <td><a href="home.php" style="text-decoration:none"><font color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>HOME</b></a></font></td><td></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <b>PRODUCT GALLERY</b></br></br></td>
         </tr>
      </table>
  </td>
  </tr> 
   <br/>
	<tr> <td>
            <table align="center" width="100%">
              <tr>
                 <td class="about" align="center">
                     PRODUCT GALLERY
                </td>
			  
			  </tr>
			<tr><td align="center"><img src="img/line.jpg" width="200" height="20"/></td></br></br></tr>
    <tr align="center"><td><hr /></td></tr></table>
	</td>
	</tr>
	 <?php
  include 'config.php';
   $sql="select * from product_tbl";
	$res=mysql_query($sql);
	 while($r = mysql_fetch_assoc($res))
	 {
	  $q1="select * from category_tbl where c_id =".$r['c_id']."";
	  $r1=mysql_query($q1);
	   $rec=mysql_fetch_assoc($r1);
	   ?>
	    <tr>
       <td align="center">
       </br>
        </br><font size="20px" color="#000000"><?php echo $rec['c_name'] ?> </font>
  </td>
 
  </tr>
   <table  cellpadding="0" cellspacing="1" width="80%" align="center" frame="below">
              <tr>
                 <td>
                   <table cellspacing="1" cellpadding="0" align="center" width="200" bgcolor="#E2E2E2">
                     <tr align="center">
                     <td></br><img src="<?php echo $r['Product_thumb'];?>" alt="<? php echo $r['Product_name'] ?>" width="120" height="120" /></td>
                     </tr>
   <tr align="center">
                       <td><?php echo $r['Product_des']?></td>
                     </tr>
                     <tr align="center">
                        <td></br><font color="#FF0000"><b><?php echo  "Rs." .$r['Price'] ?></b></font>  <strike>Rs.1080</strike></td>
                     </tr>
                     <tr bgcolor="#0099FF">
                       <td height="30" align="center"><font color="#FFFFFF"><a href="addtocart.php">ADD TO CART</font> </a>
					   </td>
                     </tr>
					 				
<?php
 } 
 ?>
					 
                    </table>
					</td>
					</tr>
  					</table>
					</table>
	
  
</body>
</html>
