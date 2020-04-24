<?php
include 'conn.php';
session_start();

$bcid=$_SESSION['lid'];
$sel="select * from staffregister WHERE loginid=$bcid";
  //$update="UPDATE leaveapply set  status ='1',leave_status ='approved'";
   $update="UPDATE leaveapply set leave_status ='approved' WHERE reg_id =$bcid ";
$upd=mysqli_query($con,$update);

 

?>



