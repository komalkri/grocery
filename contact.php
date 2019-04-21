<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Grocery Shopping</title>
</head>
<style>
  input[type=text], select{
	   width:80%;
	   padding:12px 20px;
	   margin:8px 0;
	   display:inline-block;
	   border:1px solid #ccc;
	   border-radius:4px;
	   border-sizing:border-box;
	   resize:vertical;
  }
  input[type=submit]{
	 width=100%;
	 background-color:#D11B28;
	 color:white;
	 padding:14px 20px;
	 margin:8px 0;
	 border:none;
	 border-radius:4px;
	 cursor:pointer;
  }
  input[type=submit]:hover{
	  background-color:#45a049;
  }
  .contact{
	  
	   alignment-adjust:middle;
	   border-radius:5px;
	   background-color:#f2f2f2;
	   padding:20px;
  }
  </style>
<body>
<table width="100%">
 <tr>
   <td>
     <?php include 'header1.php';?>
   </td>
 </tr>
 <tr>
   <td>
     <?php include 'menutab1.php';?>
   </td>
 </tr>
 <tr>
   <td width="100%" bgcolor="#D1D1D1">
     <table align="left">
        <tr>
           <td><a href="home.php" style="text-decoration:none"><font color="#FF0000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>HOME</b></a></font></td><td></br>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;     <b>CONTACT US</b></br></br></td>
         </tr>
      </table>
   </td>
  </tr> 
  <tr>
     <td>
        <table align="center">
            <tr>
               <td align="center"><br /><br /><font size="+4" face="Arial, Helvetica, sans-serif">Contact Us</font></td>
             </tr>
             <tr>
               <td align="center"><img src="img/line.jpg" width="200" height="20" /></td>
             </tr>
             <tr>
                <td align="center"><br /><br />
                  <table width="80%" align="center">
				   <tr><td align="center" width="100%" class="contact">
                    <form action="#" name="f1" method="post"> 
                      <input type="text" id="name" name="name" placeholder="Name" />
                      <input type="text" id="sub" name="subect" placeholder="Subject" />
                      <input type="text" id="mail" name="mail" placeholder="Email" />
                     <textarea rows="6" cols="119" name="msg" style="font-family:Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;Message</textarea> 
					 
                    <br />
                      <input type="submit" value="Submit" />
                    </form>
					</td></tr></table>
                   
                 </td>
             </tr>         
         </table>
      </td>
   </tr> 
   <tr>
      <td><?php include 'footer.php';?></td>
   </tr>                
</table>        
</body>
</html>