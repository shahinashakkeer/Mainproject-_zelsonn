


<?php
		  include("conn.php");
		 
     session_start();
	
	$loginid=$_SESSION['lid'];
	$item_id=$_SESSION['item_id'];
$se=" select * from shipping  where status = '0'";
 $re=mysqli_query($con,$se);
 require('fpdf/fpdf.php');
 $pdf = new FPDF();
 $pdf->AddPage();
 //$pdf->SetFont('Arial','B',16);

$data='<table><tr><th>Scheduled Events</th></tr>';
//set font to arial, bold, 14pt
while($row=mysqli_fetch_array($re)){


 
	$firstname=$row['firstname'];
	$adress=$row['adress'];
	$place=$row['place'];
		
}
	


$pdf->SetFont('Arial','',14);
$pdf->Cell(0,20,'PAYMENT BILL',0,1,'C');
$pdf->Cell(30);

$pdf->Ln(2);
$pdf->Ln(2);

$pdf->Ln(2);
$pdf->Cell(10);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(60,20,'Customer Name:');
$pdf->Cell(60,20,$firstname);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);

$pdf->Cell(10);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(60,20,'Address:');
$pdf->Cell(60,20,$adress);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);

$pdf->Cell(10);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(60,20,'City:');
$pdf->Cell(60,20,$place);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->Ln(2);

$pdf->Cell(10);


           
  $pdf->Output();          
             
