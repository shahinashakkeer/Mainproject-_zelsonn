<?php
include "conn.php";

$b=$_POST['id'];
$sql=mysqli_query($con,"delete  from staffregister where loginid='$b'");
$sqll=mysqli_query($con,"delete  from org1 where loginid='$b'");
if ( $sql && $sqll ){
 echo "<script>alert('Removed');
      window.location='approval.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>