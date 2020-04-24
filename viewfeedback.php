 <?php

include("connection.php");
session_start();
 
$obj=new db();
$select="select * from feedback ";
$data=$obj->execute($select);
if(mysqli_num_rows($data)>0)
{
while($row=mysqli_fetch_array($data))
{	
$name=$row['name'];
$feedback=$row['feedback'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 10px double black;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 20px 0;
    display: inline-block;
    border: 5px solid pink;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}
body {
  margin: 0;
  padding: 0;
  background:lavender;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

.cancelbtn {
    width: 10;
    padding: 40px 50px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.img9 {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
</head>
<body>

 <div class="container" style="background-color:pink">
 </div>
 <form name="myForm" method="post" action="pay.php"


   onsubmit="return validateForm()" method="post">
    	
	<div class="row">
	
     <h3><?php echo $name;?> <br></h3>

<h3><?php echo $feedback;?></h3>
 
	</div>


	<?php
 }
 
}
?>







 
 </body>

</html>

