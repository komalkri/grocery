<?PHP 
session_start();
 include 'config.php';
  if(isset($_POST['add'])){
    if(isset($_SESSION['addtocart'])){
	  $item_array_id = array_column($_SESSION['addtocart'], 'product_id');
	   if(!in_array($_GET['Product_ID'],$item_array_id)){
	     $count = count($_SESSION['addtocart']);
		 $item_array = array(
		   'product_id' => $_GET['Product_ID'],
		     'item_name' => $_POST['hidden_item'],
		   'product_price' => $_POST['hidden_price'],
		   'item_quantity' => $_POST['quantity'] ,
		   );
		   $_SESSION['addtocart'][$count] = $item_array;
		   echo '<script> window.location="addtocart.php" </script>';
		   }
		   else {
		     echo '<script>  alert(" Product is already added to cart") </script>';
			 echo '<script> window.location="addtocart.php" </script>';
			 }
			}else {
			   $item_array = array( 
                'product_id' => $_GET['Product_ID'],
		   'item_name' => $_POST['hidden_item'],
		   'product_price' => $_POST['hidden_price'],
		   'item_quantity' => $_POST['quantity'],
		   );
		   $_SESSION['addtocart'][0]= $item_array;
		   }
		  }
		  
		   if(isset($_GET['action'])){
		      if($_GET['action'] == 'delete'){
			     foreach ($_SESSION['addtocart'] as $keys => $value){
				   if($value['product_id'] == $_GET['Product_ID']){
				      unset($_SESSION['addtocart'][$keys]);
					   echo '<script> alert("product has been removed")</script>';
					   echo '<script> window.location="addtocart.php" </script>';
					 }
				 }
			  }
		   }
		   
		   
 ?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" 
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Grocery Shopping</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>

  function checkoutform() {
  window.open("Checkout.php");
  
}
</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Titillium+Web');
*{
font-family: 'Titillium Web', sans-serif;
}
.product{
        border: 1px solid #eaeaec;
		margin: -1px 19px 3 px -1px;
		padding: 10px;
		text-align:center;
		background-color: #efefef;
  }
  table, th , tr {
    text-align:center;
	}
	.title2 {
	 text-align:center;
	 color:#66afe9;
	 background-color:#efefef;
	 padding:2%;
	 }
	 h2{
	   text-align:center;
	   color:#66afe9;
	   background-color:#eefef;
	   padding:2%;
	  }
	  table th{
	     background-color:#efefef;
		 }
	.col-md-3{
	  display:inline-block;
	}
		 
</style>
</head>

<body>
    <div class="container" style="width:65%">
	  <h2> Shopping Cart </h2>
	  <?PHP 
	    $query="select * from product_tbl ORDER BY Product_ID ASC";
		$res=mysql_query($query);
		if(mysql_num_rows($res)>0){
		   while($row=mysql_fetch_array($res)){
		     ?>
			  <div class="col-md-3">
			     <form method="post" action="addtocart.php?action=add&Product_ID=<?PHP echo $row['Product_ID'];?>">
				 
				   <div class="product" >
				      <img src="<?PHP echo $row['Product_thumb']; ?>" class="img-responsive" >
					  <h5 class="text-info"><?PHP echo $row['Product_name'];?></h5>
					  <h5 class="text-info"><?PHP echo $row['Product_des'];?></h5>
					  <h5 class="text-danger"><?PHP echo "Rs " . $row['Price'];?></h5>
					  <input type="text" name="quantity" size="10%"  class="form_control" value="1" />
					  <input type="hidden" name="hidden_item" value="<?PHP echo $row['Product_name'];?>">
					  <input type="hidden" name="hidden_price"  value="<?PHP echo $row['Price'];?>">
					  <input type="submit" name="add"  style="margin-top:5px;" class="btn btn-success" value="Add to cart" />
			  </div>
			  </form> 
			  </div>
			  <?PHP
			     }
				  }
				  ?>
				  <div style="clear:both"> </div>
				  <h3 class="title2">Shopping Cart Details </h3>
				  <div class="table-responsive">
				    <table class="table table-bordered">
				   <tr>
				     <th width="30%">Product Name </th>
				      <th width="10%">Quantity </th>
					   <th width="13%">Product Details </th>
					    <th width="10%">Total Price </th>
						 <th width="17%">Remove Item </th>
						 </tr>
						 <?PHP
						     if(!empty($_SESSION['addtocart'])){
							   $total =0;
							   foreach ($_SESSION['addtocart'] as $key => $value){
						  ?>
						  <tr> 
						    <td><?PHP echo $value['item_name'];?></td>
							 <td><?PHP echo $value['item_quantity'];?></td>
							  <td>Rs.<?PHP echo $value['product_price'];?></td>
							   <td>Rs.<?PHP echo number_format( $value['item_quantity'] * $value['product_price'],2);?></td>
							   <td><a href="addtocart.php?action=delete&Product_ID=<?PHP echo $value['product_id'];?>">
							   <span class="text-danger">Remove Item
							   </span></a></td>
						   </tr>
			              <?PHP 
						     $total = $total + ($value['item_quantity'] * $value['product_price']);
							 $_SESSION['tot']=$total;
							// echo "Session : ".$tot=$_SESSION['tot'];
							 }
							 ?>
							 <tr>
							   <td colspan="3" align="right"> total </td>
							   <th align="right">Rs.<?PHP echo number_format($total,2);?></th>
							   <th align="right"> <button type="submit"  onclick="checkoutform()"class="success" name="Checkout">CheckOut</button></th>  
							   </td>
							   </tr>
							   <?PHP
							      }
								  ?>	
								  </table>			   
	       </div>
	
	</div>
</body>
</html>
