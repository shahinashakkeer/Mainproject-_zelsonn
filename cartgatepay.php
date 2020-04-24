
<?php
session_start();
?>
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
	          <li class="nav-item"><a href="ORG1.php" class="nav-link">LOGOUT</a></li>
			
	          <li class="nav-item"><a href="cat.php" class="nav-link">CATEGORYS</a></li>
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

<br><br><br><div class="container">
<h1>PAYMENT</h1>
 
<form name="myForm" method="post"  


   onsubmit="return validateForm()">

<form>
<div class="tab-for">				
													<!--<h5>Amount</h5>
													 <input type="text" name="total"   readonly value="<?php echo $total;?>" required="">
													

												<center><br><input type="submit" value="submit" name="submit"></center>
											</form>
											
											</div>
										</div>
									</div>
									
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
										

											
											
</fieldset>
</body>
</form>


-->




<?php

include('connection.php');
$bcid=$_SESSION['lid'];
//$login=$_SESSION['login'];
//$total=$_SESSION['total'];
//$_SESSION['total']=$total;
//$type=$_SESSION['type'];
//$usr_name=$_SESSION['cust_name'];
//$amount=$_GET['total'];
//$cash=trim($amount, '"');
$sub_total=$_GET['id'];

//$total=$price*$qty;
//$_SESSION['sub_total']=$sub_total;
$item_id=$_SESSION['item_id'];
$qty=$_SESSION['qty'];

  $obj=new db();
$selec="select * from item WHERE item_id='$item_id'";
$data1=$obj->execute($selec);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data1)>0)
{

while($row=mysqli_fetch_array($data1))
{
$itemname=$row['itemname'];	
$price=$row['price'];
$stock=$row['stock'];

$total=$price*$qty;
$_SESSION['total']=$total;

}
}

if($bcid)
{

?>
<!DOCTYPE html>
<html>
<?php
//require_once($_SERVER['DOCUMENT_ROOT'].  "/RazorpayKit/RazorpayKit/config.php");

require_once($_SERVER['DOCUMENT_ROOT']. "/PROJECT/RazorpayKit/razorpay-php/config.php");

?>

<head lang="en">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://yegor256.github.io/tacit/tacit.min.css"/>

    <meta charset="utf-8" />
    <title>Credit Card Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js1/3dslider.js"></script>
    <script src="js1/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="js1/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script> 
$(document).ready(function(){
  $("#button").click(function(){
    $("#div").fadeOut();
  $("#div").fadeOut("slow");
  $("#div").fadeOut(3000);
  });
});
</script> 
-->
</head>
<body>

<div class="container">

<div >
   <center><h1><b>ZELSONN</b></h1></center> 
</div>

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Pay Now</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" method="post">
                        
                         <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <form id="checkout-selection" method="POST">
  
    
    
       
        
    
                                    <label>AMOUNT</label><br>
                                     <input type="text" name="total" id="total"  readonly value="<?php echo $sub_total;?>" required="">
                                 
                                </div>
                            </div>
                        </div>
                        
                          <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-14">
                            <input type="submit" name="submit" id="button" value="PAY NOW" class="btn btn-warning btn-lg btn-block">
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>


    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $(document).ready(function(){

            $('form').submit(function (e){

                var totalAmount = $("#total").val();
				alert(totalAmount);//total amount eduth oru variablililu vekkuka


        var options={
        "key": "rzp_test_GH8T9XatrvIqPj",//ivide payment gatewayil ninnolla key kodukkuka
        "amount": totalAmount*100,//amount into 100 cheythale actual amount kanikku 
        "name": "Eventena",//ithoke set cheyyuka a gatewayil kainikkanda reethilu
        "description": "eventmanagement",
        "currency":"INR",// ithelu thottekkallu
        "image": "img1.jpg",//icon mattan
        "handler": function (response)
         {
            $.ajax({
            url: '/PROJECT/gate.php',//ivide nammade payment tablilinte code oke kedakkunna php file specify cheyyuka
            type: 'POST',
            data: {
                razorpay_payment_id:response.razorpay_payment_id ,//ith payment gateway thannne genarate cheytholum
                 totalAmount : totalAmount ,// baaki nammade variables
                
            }, 
            success: function (msg)
            {
               if(msg=="1")
               {
              alert("Payment Success "+msg);
			  window.location.href="feedback.php";
               }
               else
               {
              alert("Payment Error"+msg);
			   alert("Payment Success "+msg);
               }
            
            }
        });
      
    },
    "theme": {
        "color": "#9c7f73"//ith color set cheyyan
    }
    };



   var rzp1 = new Razorpay(options);
   rzp1.open();// e code payment gateway open cheyyum
   e.preventDefault();

            });

        });
    </script>
</body>
</html>

<?php
}
else
  header("location:feedback.php");
?>
index.php
Displaying index.php.