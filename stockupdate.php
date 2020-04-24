<?php

include "conn.php";
if(isset($_POST['submit']))
{
$quantity=	$_POST["quantity"];
$stock=	$_POST["stock"];
$item_id=$_POST["item_id"];
	  
 
$re= mysqli_query($con,"select * from item where item_id='$item_id'");


if(mysqli_num_rows($re)>0)
{

	
	$result=mysqli_query($con,"update item SET stock='$stock' - '$quantity' where item_id='$item_id'");
	if($result)
	{
	echo "success";
	}
	else
	{
	echo "error";
	}
	



	  



}
 

}
else
{
	echo "set error";
}
?>