<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>ZELSONN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
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
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">ZELSONN</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BRANDS</a>
			   <div 
			   class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
              	<a class="dropdown-item" href="wishlist.html">Wishlist</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
			  
            </li>
	          <li class="nav-item"><a href="cat.php" class="nav-link">CATEGORYS</a></li>
	          <li class="nav-item"><a href="feedback.php" class="nav-link">FEEDBACKS</a></li>
	          <li class="nav-item"><a href="ORG1.php" class="nav-link">LOGOUT</a></li>
			  <li class="nav-item"><a href="changepasswords.php" class="nav-link">CHANGE PASSWORD</a></li>
	          

	        </ul>
	      </div>
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
		  
		  
		  
		  
		  
		  
		  
		  
		  <style>






      img {
      
      padding:3px;
      border:1px solid #021a40;
      }
    </style>
<?php

include("connection.php");
//session_start();
//$price=""
//$cid=$_SESSION['lid'];
 $categoryname="";
$obj=new db();
$select="select * from item where category_id= '15' LIMIT 1,3 ";
//$select="select * from item where category_id= '15' LIMIT 3 OFFSET 4";
//$select="select itemname,itemimage,quantity,price from price p inner join quantity q on p.quantity_id=q.quantity_id inner join item i on q.quantity_id=i.quantity_id where i.category_id= 8 ";
//$select="select itemname,itemimage,quantity,price from price p inner join quantity q on q.quantity_id= p.quantity_id inner join item i on i.quantity_id=p.quantity_id ";

//$select="SELECT itemname,itemimage,quantity,price FROM item i,quantity q,price p WHERE i.item_id=p.item_id and p.quantity_id=q.quantity_id  and category_id= 8";

$data=$obj->execute($select);
if(mysqli_num_rows($data)>0)
{

while($row=mysqli_fetch_array($data))
{	
$itemname=$row['itemname'];
$itemimage=$row['itemimage'];
$quantitys=$row['quantitys'];
$price=$row['price'];
$description=$row['description'];
$stock=$row['stock'];





//$quantity=$row['quantity_id'];
//$itemid=$row['item_id'];

//$ss="select price from price where item_id=$itemid ";

//$s1="select quantity.quantity, price.price ,from quantity inner join price where quantity.quantity_id=price.quantity_id " ;

?>




<!DOCTYPE html>
<html>
<head>
<style>


* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>



 <div class="container">

 
<form name="myForm" method="post" action="imgpay.php " enctype="multipart/form-data" accept-charset="UTF-8"


   onsubmit="return validateForm()">
   
     
   
	<div class="column">
      
	<br><br><h6><?php echo $itemname;?> </h6> 
      
<!--<h3><img src="upload/<?php echo $row['itemimage'];?>" style='width:150; height:100;'></h3>
<img src="staffimage.jpg" alt="Snow" style="width:50%">-->

<!--<img src="upload/<?php echo $row['itemimage'];?>"style="width:30%"  "height:10">-->
<?php $itemid=$row['item_id'];
 	 ?>
<a href="imgpay.php?id=<?php echo $itemid; ?>">
<img src="upload/<?php echo $row['itemimage'];?>"style="width:30%"  "height:10" >
</a>
<h6><?php echo $quantitys;?> </h6> 
<h6><?php echo $description;?> </h6>
<h6><?php echo $price;?>/-</h6> <br>
<h6>STOCK=<?php echo $stock;?></h6> <br>
	 
	
 <!--<br><button  type="button"><a href="imgpay.php?id=<?php echo $itemid; ?>">BUY NOW</a> </button> </td>-->

 
   </div>
	</div>
 
 
  

<?php
 }
 
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.pagination a {
  color: black;

  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>


<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="pagination.php">1</a>
  <a class="active" href="pagination2.php">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>






  </form>
 
 </body>

</html>
