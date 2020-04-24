<?php

include("connection.php");
session_start();
$bcid=$_SESSION['lid'];

//$amount=$_SESSION['amount'];
 
$obj=new db();
$select="select * from routes WHERE staffname=$bcid";
$data=$obj->execute($select);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data))
{	
$staffname=$row['staffname'];
$place=$row['place'];
$item=$row['item'];
$adress=$row['adress'];




?>



<style>

.container {
    border-radius:5px;
    background-image: url("regstaff.jpg");
    padding: 180px;
    margin-left:300px;
width:40%;
 
}
body {
  margin: 0;
  padding: 0;
  background:violet;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}
input[type=text],[type=date],[type=button],[type=email],[type=password] ,select, textarea {
    width: 60%;
    padding: 12px;
    border: 2px solid #ccc;
    border-radius: 5px;
    resize: vertical;
}

h1
{
margin-left:120px;
color:white;
}
label {
    padding:12px,20px;
    display: inline-block;
color:white;
}

input[type=submit],[type=button] {
    
    background-color:green;
    padding: 12px 20px;
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


<div class="container">

<fieldset>
 <form name="myForm" action="total.php" autocomplete="off"

   onsubmit="return validateForm()" method="post">

<div class="row">
     <div class="col-25">
        <label for="price">STAFF NAME:</label>
		 </div>
		 <div class="col-75">
        <input type="text"  name="staffname"  readonly  value="<?php echo $staffname;?>" required="">
      </div>
	  </div>
	  <div class="row">
     <div class="col-25">
        <label for="price">ROUTE:</label>
		 </div>
		 <div class="col-75">
        <input type="text"  name="place"  readonly  value="<?php echo $place;?>" required="">
      </div>
	  </div>
	   <div class="row">
     <div class="col-25">
        <label for="price">ITEM:</label>
		 </div>
		 <div class="col-75">
        <input type="text"  name="item"  readonly  value="<?php echo $item;?>" required="">
      </div>
	  </div>
	   <div class="row">
     <div class="col-25">
        <label for="price">ADDRESS:</label>
		 </div>
		 <div class="col-75">
        <input type="text"  name="adress"  readonly  value="<?php echo $adress;?>" required="">
      </div>
	  </div>
	  
	  
    

    
	

    
	
	<!--<h3><?php echo $staffname;?> : <?php echo $place;?>  </h3> -->
	
	
	

       
    
     

	  


 

</div>
  </div>


 <?php
 }
 

}
?>

</fieldset>
</body>
</form>



<html>