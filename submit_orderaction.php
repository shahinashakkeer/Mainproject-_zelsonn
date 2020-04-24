<!DOCTYPE html>
<html>

<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: purple;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: purple;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="adminlogin.php">HOME</a></li>
  <li><a href="contact.html">CONTACT</a></li>
  <li><a href="about.html">ABOUT</a></li>
  <li><a href="ORG1.php">LOGOUT</a></li>
</ul>

</body><?php
include 'conn.php';
?>
<?php


//$selectt="SELECT shipping.firstname,shipping.adress,shipping.houseno,customer_order.order_quantity,customer_order.purchase_date, customer_order.item_id,customer_order.purchase_price,shipping.place FROM shipping INNER JOIN customer_order ON customer_order.login_id = shipping.login_id";



$select=" SELECT shipping.firstname,shipping.adress,shipping.houseno,customer_order.order_quantity,customer_order.purchase_date, customer_order.item_id,customer_order.purchase_price,shipping.place,item.itemname FROM item,shipping JOIN  customer_order  WHERE item.item_id = customer_order.item_id and customer_order.login_id = shipping.login_id and customer_order.status='0'";
//$selectt="SELECT * FROM shipping where status='0'";
//$selectt="SELECT * FROM shipping ,customer_order";
 $re=mysqli_query($con,$select);
 $a="select * from staffroute where status = '0'";
 $s=mysqli_query($con,$a); 
 
 
 
?>
 
 
 
 


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 30px;
}
body {
  margin: 100;
  padding: 0;
   background-image: url("table.jpg");
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}
</style>
</head>
<body>

<h2>ORDERS</h2>
<center>

<table style="width:50%">
  <tr>
  <th> DATE</th>
    <th> NAME</th>
    <th>PLACE</th>
 <th>STAFF</th> 	
	  <th>ADRESS</th> 
   <th>HOUSE NO</th>
	 <th>ITEM</th>
	  <th>QUANTITY</th>
	  <th>TOTAL</th>
	   <th>CONFIRM</th>
  </tr></center>
  <?php
					
						
	while($row=mysqli_fetch_array($re))
  
 {
		?>
  <tr>
  
  <form action="submit_orderaction.php" method="POST">
	
  <td>  <?php 
        echo $row['purchase_date'];
    ?>
    <td>  <?php 
        echo $row['firstname'];
		$name=$row['firstname'];
		
		
		

		
		$reg_user=mysqli_query($con,"SELECT * FROM `customerregister` where firstname='$name'");
		$reg_row=mysqli_fetch_array($reg_user);
		$reg_id=$reg_row['reg_id'];
		
    ?> 
	<input type="text" name="reg_id" id="reg_id" value="<?php echo $reg_row['reg_id'];?>" hidden>
	<td>
	
	
	<input type="text" name="shipping_id" id="shipping_id" value="<?php echo $row['shipping_id']?>" hidden>
	
	
	<input type="text" name="place" id="place" style="background-color:transparent;border:none" value="<?php 
        echo $row['place'];
		$place=$row['place'];
		//echo $place;
		$sql_place="SELECT * FROM `staffroute`,staffregister where staffregister.staffregid=staffroute.staffname and staffroute.place='$place' ";
		$sq_name=mysqli_query($con,$sql_place);

		?>" readonly>
		
		
		
		

 
	
	<!--<input type="submit" name="submit_search" id="submit_search" value="SEARCH"> -->
	
	<td>  <?php 
       
    ?>
				
			
			
			
			
		<div class="row">
      <div class="col-25">
        <label for="itemname"></label>
      </div>
<select  name="stafid" id="stafid" class="form-control">
		                      	<option value="">Select Staff</option>
		                        <?php 
								while($r=mysqli_fetch_array($sq_name))
   								{
											
									?>
   								
<option value="<?php echo $r['staffregid'];?>"><?php echo $r['firstname']?></option>

<?php
}


	
	
?>

	</select>

				
	<td>  <?php 
        echo $row['adress'];
    ?></td>
	<td>  <?php 
        echo $row['houseno'];
    ?></td>
   
	<td>  <?php 
        echo $row['itemname'];
    ?></td>
	<td>  <?php 
        echo $row['order_quantity'];
    ?></td>
	<td>  <?php 
        echo $row['purchase_price'];
    ?>
	<td><input type="submit" name="submit_ord" id="submit_ord" value="SUBMIT">
	</form>
  </tr>
   <?php
  
}
?>
  
</table>

<?php
include "connection.php";
 if(isset($_POST['submit_ord']))
  
{


$shipping_id=$_POST['shipping_id'];

$reg_id=$_POST['reg_id'];

$staffregid=$_POST['stafid'];
//$loginid=$_SESSION['lid'];

//$ndate=date("Y")."-".date("m")."-".date("d");
                


$sqlll="INSERT INTO `customer_order_staff`(`id`, `shipping_id`, `reg_id`, `staffregid`, `status`) VALUES (NULL,$shipping_id,$reg_id,$staffregid,'0') ";






//"INSERT INTO `customer_order_staff`(`id`, `shipping_id`, `sid`, `reg_id`, `status`) VALUES ( NULL,'$i','$cpid','$it','$ad','$ndate','$loginid','$regid')";
$objj=new db();
$objj->execute($sqlll);
$upd=mysqli_query($con,"UPDATE shipping SET status='1' WHERE shipping_id='$shipping_id'");
 
 if($sqlll)
 {
	echo"<script>alert('staff allocated successfully')</script>";
 }

}
 
  
 

?>



