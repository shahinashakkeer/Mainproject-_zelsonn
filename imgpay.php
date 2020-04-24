
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>ZELSONN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

   

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	 <span class="text">7510537296</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">zelsonn@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free shopping</span>
					    </div>
				    
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	  
	      <a class="navbar-brand" href="index.html">ZELSONN</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          
            </li>  <li class="nav-item"><a href="cart1.php" class="nav-link">CART</a></li>
	          <li class="nav-item"><a href="feedback.php" class="nav-link">FEEDBACKS</a></li>
	         
			
	          <li class="nav-item"><a href="cat.php" class="nav-link">CATEGORYS</a></li>
			        <li class="nav-item"><a href="hi.php" class="nav-link">PREVIOUS ORDERS</a></li>
			   <li class="nav-item"><a href="ORG1.php" class="nav-link">LOGOUT</a></li>
	        </ul>
	      </div>
	 
	  </nav>
	   <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style=style="background-image: url(vegefoods/images/c3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	             <!-- <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>-->

	          </div>
	        </div>
	      </div>
		  </section>
<!DOCTYPE html>
<html>


</style>
</head>

</html>


<?php

include("connection.php");
session_start();
$bcid=$_SESSION['lid'];
$item_id=$_GET['id'];
$_SESSION['item_id']=$item_id;
$x=$_SESSION['item_id'];




$obj=new db();
//echo $bcid;
$select="select * from customerregister WHERE loginid=$bcid";
$data=$obj->execute($select);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data))
{	
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$adress=$row['adress'];
$district=$row['district'];
//$DOB=$row['DOB'];
}
}

?>

<style>



.footer {
  position:fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height:8%;
   background-color: black;
   margin-top:100px;
}


input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button]:hover {
    background-color: #45a049;
}
body {
  
   background-image: url("table.jpg");
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 800;
}


input[type=text],[type=date],[type=radio],[type=email],[type=password] ,select, textarea {
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


input[type=submit]:hover {
    background-color: #45a049;
}
input[type=button]:hover {
    background-color: #45a049;
}
.container {
    border-radius:5px;
    background-image: url("regstaff.jpg");
	 background-color: blue;
    padding: 20px;
    margin-left:400px;
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
<body>


<br><br><br><div class="container">

<br><fieldset>
 <!--<form name="myForm" action="imgpay_action.php" autocomplete="off" enctype="multipart/form-data" accept-charset="UTF-8"

   onsubmit="return validateForm()" method="post">-->
   <form name="myForm" method="post" action="imgpay_action.php " enctype="multipart/form-data" accept-charset="UTF-8" onsubmit="return validateForm()" method="post">

<div class="column">
<div class="row">
      <div class="col-25">
        <label for="entername">Delivered:</label>
      </div>
    
<div class="row">
    
	 </div>
	
	<h5><?php echo $firstname;?> <?php echo $lastname;?><br>  
	  </h5>
	

       
    
     

	  


 

</div>
  </div>




   
<?php	
  $obj=new db();
$selec="select * from item WHERE item_id='$item_id'";
$data1=$obj->execute($selec);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data1))
{
	
	$itemimage=$row['itemimage'];
	
$itemname=$row['itemname'];	
$price=$row['price'];

$_SESSION['price']=$price;

$stock=$row['stock'];
}
}
?>

	  <div class="row">
	  <input type="hidden" value="<?php echo $row['item_id']; ?>" name="img">
	  
	  <img src="upload/<?php echo $itemimage;?>"style="width:30%"  "height:10"/>
	


</div>
<div class="row">
     <div class="col-25">
        <label for="price">ITEM:</label>
		 </div>
		 
		 <div class="col-75">
		 
        <input type="text"  name="itemname"  readonly  value="<?php echo $itemname;?>" required="">
      </div>
	  </div>
	<div class="row">
     <div class="col-25">
        <label for="price">PRICE:</label>
		 </div>
		 <div class="col-75">
        <input type="text"  name="price"  readonly  value="<?php echo $price;?>" required="">
      </div>
	  </div>
	  
	   <input type="text"  name="stock" id="stock" readonly style="display:none"  value="<?php echo $stock;?>" required="">
	
<div class="row">
      <div class="col-25">
        <label for="quantity">QUANTITY:</label>
      </div>
      <div class="col-75">
       <input type="text"  name="quantity" id="quantity"  pattern="[2-9]{1}{9}"  required >
        
      </div>
    </div>  
	  
	  
     
  <!--<h3><?php echo $price;?></h3>
	  
      </div>-->
	  
	  
	  

<br><br> <button  type="submit"name="submit" id="submit" >BUY NOW </button> 
<!--<a h <a href+""ref="cart.php"><button  type="submit" name="submit" id="submit" >ADD TO CART </button> </a></td>-->
 <!--<br><button  type="button"><a href="imgpay.php?id=<?php echo $itemid; ?>">ADD TO CART</a> </button> </td>-->

 <!-- <a href="cart1.php?id=<?php echo $itemid; ?>"> --->
<br><input type="submit" name="addcart" id="addcart" value="ADD TO CART" ></td>
 <!--<h1><b><center><button onclick="myFunction()"><a href="cart1.php?id=<?php echo $sub_total; ?>">CART</button></center></h1>-->
</form>

<?php}
}
?>
</fieldset>
</body>




<html>