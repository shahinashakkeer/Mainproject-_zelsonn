<?php

include 'conn.php';
session_start();


 




$regid=$_SESSION['lid'];
$q="select * from staffregister";
  $sq=mysqli_query($con,$q); 
  
  
  $a="select * from staffroute";
  $s=mysqli_query($con,$a); 
$i="select * from places";

  $sql=mysqli_query($con,$i); 
  
  $it="select * from item";

  $sqli=mysqli_query($con,$it); 
  
   $sh="select * from shipping";

  $sqlii=mysqli_query($con,$sh); 
  
?>

<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Registeration completed");
        return false;
    }
}
</script>
<style>
body
{
<body background="regcustomer.jpg">
}

input[type=text],[type=date],[type=button],[type=email],[type=password] ,select, textarea {
    width: 60%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 5px;
    resize: vertical;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 6px;
  text-decoration: none;
  font-size: 20px;
	
width:10%;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body {
  margin: 5;
  padding: 10;
  background:pink;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}
h2 

  {
    color: tomato;
    text-align: center;
    
	margin-top:80px;
	margin-bottom:80px;
 }
h1{
	color:white;
}

.img{
	width:180px;
	height:50px;
    }
.centered {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
.text{
	width:105%;
	height:50%;
	margin-left:200px;
	margin-top:100px;
	 column-count: 2;
      }
.footer {
  position:fixed;
   left: 0;
   bottom:10;
   width: 100%;
   height:8%;
   background-color: black;
   margin-top:100px;
}
ul{
margin:10px;
padding:80px;
list-style:none;
}
ul li{
float:left;
width:200px;
height:60px;
background-color:yellow;
opacity:.5;
line-height:50px;
text-align:center;
font-size:20px;
margin-right:30px;
}
ul li a{
text-decoration:none;
}
ul li a:hover{
background-color-green;

}
ul li ul li
{
display:none;l
}
ul li:hover ul li{
display:block;
}


h1
{
margin-left:120px;
color:white;
}
label {
    padding:12px,20px;
    display: inline-block;
color:black;
}

input[type=submit],[type=button] {
    
    background-color:pink;
    padding: 12px 25px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left=200px;
    float: center;
}

input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button]:hover {
    background-color: #45a049;
}
.container {
    border-radius:15px;
    background-image: url("regstaff.jpg");
    padding: 10px;
    margin-left:200px;
width:40%;
 
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit],input[type=button] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body >
<center>
<ul><li><a href="HOME1.php">HOME</a></ul></center>

<div class="container">
<h1>ROUTE    ALLOCATION</h1>
 
<form name="myForm" method="post" action="root.php"


   onsubmit="return validateForm()" method="post">



 


  
   
 <div class="row">
     
<select  name="place" id="place" class="form-control">
		                      	<option value="">Select place</option>
		                        <?php 
								while($r=mysqli_fetch_array($sql))
   								{
									?>
   								
<option value="<?php echo $r['place'];



//echo "<script> alert($cid);
           //window.location='company.php'</script>";


?>"><?php echo $r['place'];
$_SESSION['place']= $r['place'];

?>


</option>



<?php
}
?>
<div class="col-25">
        <label for="itemname">place:</label>
		<input type="submit" name="submit_search" id="submit_search" value="SEARCH">
      </div>

		                    </select><br>
							
							<?php
							
							
if(isset($_POST['submit_search']))
	
	
	{
		
		$place=$_POST['place'];
		$sql_place="SELECT * FROM `staffroute` where place='$place' ";
		$sq_name=mysqli_query($con,$sql_place); 
	
		
	}
							
							?>
			<br> <div class="row">
      <div class="col-25">
        <label for="itemname">staff:</label>
      </div>
<select  name="staffname" class="form-control">
		                      	<option value="company">Select Staff</option>
		                        <?php 
								while($r=mysqli_fetch_array($sq_name))
   								{
									?>
   								
<option value="<?php echo $r['staffname'];

//echo "<script> alert($cid);
           //window.location='company.php'</script>";


?>"><?php echo $r['staffname']?>


<?php
}
?>

		                    </select><br>
  				
							
							
							
							
	  
 <br><div class="row">
      <div class="col-25">
        <label for="itemname">item:</label>
      </div>
<select  name="item" class="form-control">
		                      	<option value="item">Select place</option>
		                        <?php 
								while($r=mysqli_fetch_array($sqli))
   								{
									?>
   								
<option value="<?php echo $r['itemname'];

//echo "<script> alert($cid);
           //window.location='company.php'</script>";


?>"><?php echo $r['itemname']?>


<?php
}
?>

		                    </select><br>
<br><div class="row">
      <div class="col-25">
        <label for="itemname">ADDRESS:</label>
      </div>
<select  name="adress" class="form-control">
		                      	<option value="item">Select adress</option>
		                        <?php 
								while($r=mysqli_fetch_array($sqlii))
   								{
									?>
   								
<option value="<?php echo $r['adress'];

//echo "<script> alert($cid);
           //window.location='company.php'</script>";


?>"><?php echo $r['adress']?>


<?php
}
?>

		                    </select><br>								
							
							


    
<br><center><input type="submit" name="submit" id="submit" value="ADD">
<input type="submit" name="usubmit" id="usubmit" value="UPDATE">

<input type="submit" name="dsubmit" id="dsubmit" value="DELETE"></center>

</div>
</body>
 </form>

<?php
 include "connection.php";
 if(isset($_POST['submit']))
{


$i=$_POST['staffname'];
$cpid=$_POST['place'];
$it=$_POST['item'];
$ad=$_POST['adress'];

$loginid=$_SESSION['lid'];

$ndate=date("Y")."-".date("m")."-".date("d");
                

$sqlll="INSERT INTO routes(`id`, `staffname`, `place`, `item`,`adress`,`date`,`loginid`,`staffregid`) VALUES ( NULL,'$i','$cpid','$it','$ad','$ndate','$loginid','$regid')";
$objj=new db();
$objj->execute($sqlll);
 

}
 
  
 

?>



</body>
</html>
