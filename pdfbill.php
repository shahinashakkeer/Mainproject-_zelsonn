
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style>

button
{

  background-color:#fff;
  border:none;
  cursor:pointer;
}

button:hover
{

  background-color:#fff;
  border:none;
  cursor:pointer;
  color:green;
}

#pdfdiv
{
color:green;
}
</style>

   <script type="text/javascript" src="jspdf.min.js"></script>
  
 <script type="text/javascript" src="jquery-git.js"></script>
    
  <style type="text/css">
    
  </style>

  <title></title>

<script type='text/javascript'>//<![CDATA[
$(window).on('load', function() {
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#pdfview').click(function () {
    doc.fromHTML($('#pdfdiv').html(), 15, 15, {
        'width': 700,
            'elementHandlers': specialElementHandlers
    });
    doc.save('file.pdf');
});
});//]]> 

</script>

</head>

<body>

  <div id="pdfdiv">
     <?php
		  include("conn.php");
		 
     session_start();
	
	$loginid=$_SESSION['lid'];
	$item_id=$_SESSION['item_id'];
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
   
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
<?php
$ndate=date("Y")."-".date("m")."-".date("d");
//$se=" select * from `cart`,`item`,`customerregister` where cart.item_id = item.item_id && cart.reg_id = customerregister.loginid && cart.status='0'";
$se=" select * from shipping  where status = '0'";
 $re=mysqli_query($con,$se);
?>


	<?php
					
			$sub_total=0;	
            $i=rand();			
	while($row=mysqli_fetch_array($re))
  
 {
		?>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                               
                            </td>
                            
                            <td>
                                Invoice #: <?php echo $i;?><br>
                                Created: <?php echo $ndate;?><br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <b>ZELSONN</b><br>
                                
                            </td>
                            
                            <td>
                               <?php echo $row['firstname'];?><br>
                                <?php echo $row['place'];?><br>
								<?php echo $row['adress'];?>
								<br>
                               
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
           <?php
//$se=" select * from `cart`,`item`,`customerregister` where cart.item_id = item.item_id && cart.reg_id = customerregister.loginid && cart.status='0'";
$se=" select * from shipping  where status = '0'";
 $re=mysqli_query($con,$se);
?>
				<table border="1" style="width: 75%;" align="center">
						<tr style="height: 40px">
						    
						 
							
							<th style=" padding-left: 20px;">Item Name</th>
							<th style=" padding-left: 20px;">Price</th>
							
							
							<th style=" padding-left: 20px;">Quantity</th>
							<th style=" padding-left: 20px;">Total</th>
							
								
			</tr>
		<?php
					
			$sub_total=0;			
	while($row=mysqli_fetch_array($re))
  
 {
		?>
    <tr>
<td style="font-size: 17px;"> 
   <?php 
       echo $row['itemname'];
    ?>
  </td>
  <td style="font-size: 17px;"> 
   <?php 
        echo $row['total'];
    ?>
  </td>

<td style="font-size: 17px;" >
 <?php echo $row['qty'];?>
</td>
<td style="font-size: 17px;"> 
<?php
   echo $row['total']*$row['qty'];
   ?>
  </td>
  
</tr>
 <?php
  $x=$row['qty'];
  $y=$row['total'];
  $total=$x*$y;
  $sub_total=$sub_total+$total;
 
  ?>


<?php
}
?>	
</table>
    
            
        </table>
		<table class="meta">
				<tr>
					<th><span >Total Amount </span></th>
					<td><span >Rs.<?php echo $sub_total;?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span>
       Rs.<?php echo $sub_total ?>
    </span></td>
				</tr>
				
			</table>
    </div>
			<?php
 }
 ?>
 
 
 
 <?php


		
$update="UPDATE shipping SET status = '1'";
$upd=mysqli_query($con,$update); 
	


?>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
			</body>
			</html>
</div>
<div id="editor"></div>
<button id="pdfview">Download PDF</button>
</body>
</html>

