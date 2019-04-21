<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Grocery Shopping </title>
<style type="text/css">
 .about {
    color:#333;
    font-size:50px;
 }
 .theme {
    color:#00CCFF;
    font-size:20px;
    
 }
 a:hover img{
     height: 100%;
     width: 100%;
     transform: sscale(1.5);
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }
  .menu{
    width:100%;
	background-color:#D1D1D1;
	}
  
 </style>
</head>

<body>
   <table> 
    <tr>
     <?php 
         include 'header1.php';
         ?>
         </tr>
         <tr>
          <?PHP 
            include 'menutab1.php';
            ?>
            </tr>
			<tr>
   <td class="menu" >
     <table align="left">
        <tr>
           <td><a href="home.php" style="text-decoration:none"><font color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>HOME</b></a></font></td><td></br>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;     <b>ABOUT US</b></br></br></td>
         </tr>
      </table>
   </td>
  </tr> 
 
            <br/>
			<tr>
            <table align="center" width="100%">
              <tr>
                 <td class="about" align="center">
                     Welcome to our Site
                </td>
			  
			  </tr>
              <tr>
              <td width=100%> <hr/></td>
              </tr>
            </table>
			</tr>
            <table align="center" cellspacing="0">
              <tr>
               <td align="center"><a href="#"><img src="img/about.jpg" height="80%" width="80%"></img></a></td>
               <td align="center"><a href="#"><img src="img/about2.jpg" height="80%" width="80%"></img></a></td>
               </tr>
              </table> 
			  <br/> <br/> <br/>
              <table cellpadding="0" cellspacing="0" align="center">
                <tr>
                  <td class="theme" bgcolor="#CCCCCC" align="center">The website will ease the shopping operations for customer of online store.<br/>
                   It will provide vendor or administration functionality to manage categories and products.<br/>
                   Consumer will be able to browse and search products under different categories.<br/>
                    Selected products or items selected for purchase would be added into the virtual shopping cart.<br/> 
                    This can be managed separately by customer.
                  It can be examined at any time by<br/> customer for selected products, their quantity & price.</td>
				<td align="right">  <img src="img/videoimg2.png" align="right" height="80%" width="80%" /></td>
                  </tr>
                  </table> 

              <tr>
                <td> <hr/> </td>
                </tr>
            <tr>
              <?PHP
                 include 'footer.php';
                 ?>
            </tr>
     </table>
 </body>
 </html>
