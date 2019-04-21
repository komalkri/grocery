<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
  a:link,a:visited{
    display:block;
    front-weight:bold;
    color:blue;
  
  }
  a:hover {
    text-decoration:none;
    font-color: #fff;
    font-size:18px;
  }
  .topnav{
    background-color: #fff;
    overflow: hidden;
    font-size:17px;
  }
  .container1 {
     position :relative;
     text-align: center;
     color:#fff;
  }
  .centered {
    background-color:#3333;
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

  }
  .dropbtn {
  background-color:#FFF;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#FF9;}
  </style>
<script>
  var i=0;
  var images = [];
  var time = 5000;

  images[0] = 'img/banner1.jpg';
  images[1] = 'img/banner2.jpg';
  images[2] = 'img/banner3.jpg';
  images[3] = 'img/banner4.jpg';

  function imageChange() {
    document.slide.src = images[i];

    if(i < images.length -1){
       i++;
    } else {
      i=0;
    }
    setTimeout("imageChange()",time);
  }
  window.onload=imageChange;
  
  </script>
</head>

<body>
<table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" >
            <tr>
			<td>
			  <table width="100%" >
			   <tr class="topnav"> 
               <td align="center">
               <p>
			    
				<div class="dropdown">
  <button class="dropbtn">ALL CATEGORIES</button>
  <div class="dropdown-content">
    <a href="#">Household</a>
    <a href="#">Snacks & Beverages</a>
    <a href="#">Personal Care</a>
    <a href="#">Fruits & Vegetables</a>
    <a href="#">Baby Care</a>
    <a href="#">Soft Drinks</a>
    <a href="#">Frozen Foods</a>
    <a href="#">Bakery & Bread</a>
    <a href="#">Sweets</a>
    
  </div>
</div>
				 </p>
               </td>
               <td align="center">
                
		<a href="Home.php" style="text-decoration:none"><font color="#000000"> HOME</font></a>
        </td>
        <td align="center">
        <a href="About.php" style="text-decoration:none"><font color="#000000">ABOUT US</font></a>
        </td>
        <td align="center">
        <p>
			    
				<div class="dropdown">
  <button class="dropbtn">KITCHEN</button>
  <div class="dropdown-content">
    <a href="bakery.php">Bakery</a>
    <a href="#">Baking Supplies</a>
    <a href="#">Coffee, Tea & Beverages</a>
    <a href="#">Dried Fruits & Nuts</a>
    <a href="#">Sweets & Chocolates</a>
    <a href="#">Spices & Masalas</a>
    <a href="#">Jam, Honey & Spreads</a>
    <a href="#">Pickles</a>
    <a href="#">Rice, Flour & Pulses</a>
    <a href="#">Meat, Poultary & Seafoods</a>
    <a href="#">Sauces & Cooking Pastes</a>
  </div>
</div>
				 </p>
        </td>
        <td align="center">
        <p>
       <div class="dropdown">
  <button class="dropbtn">HOUSEHOLD</button>
  <div class="dropdown-content">
    <a href="#">Kitchen & Dining</a>
    <a href="#">Detergents</a>
    <a href="#">Utensils & Cleaners</a>
    <a href="#">Dish Wash</a>
    <a href="#">Pooja Needs</a>
    <a href="#">Floor & Other Cleaners</a>
    <a href="#">Plastic Care</a>
    <a href="#">Home Ware</a>
    
  </div>
</div>
				 </p>
        </td>
        <td align="center">
        <a href="contact.php" style="text-decoration:none"><font color="#000000">CONTACT US</font></a>
         </td>
           </tr>  
         </table>
		 </td>
		 </tr>
		 </table>
      <div class="container1">
         <img name="slide" width="100%" height="100%">
         <div class="centered"><b><font size="20px">STAY HOME AND  SHOP ONLINE...</font></b></div>
        </div> 
    
         
     
      
</body>
</html>