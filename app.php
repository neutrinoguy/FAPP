<!-- PHP code to validate date -->
<?php 
$datetime1 = new DateTime($_POST["from_date"]);
$datetime2 = new DateTime($_POST["to_date"]);
$difference = $datetime1->diff($datetime2);

if( $difference->d == '0' && $difference ->m == '0' && $difference->y == '0') {

		 $data ='on'.'&nbsp;'.$_POST["from_date"] ;
		}

 else {

         $data = 'from'.'&nbsp;'.$_POST["from_date"].'&nbsp;'.'to'.'&nbsp;'.$_POST["to_date"];
	  }
?>

<!DOCTYPE html>
<head>
	<title>FAPP-Application</title>
</head>
<body>
<img style="" src="img/banner.jpeg" />
<div dir="ltr" style="margin-left:30px;margin-top:50px;margin-right:10px;">
<!-- Application Heading -->
To,<br>
<?php echo $_POST["to"]; ?><br>
<?php echo $_POST["department"]; ?>&nbsp;Department,<br>
SVBIT, Vasan<br>
Date:&nbsp;<?php echo date("d/m/Y"); ?><br>
<!-- Application Subject -->
<p style="text-align:center"><b>Subject: Leave application for marriage</b></p>
<!-- Application Body -->
Respected Sir/Madam,<br>
Myself, <?php echo $_POST["name"]; ?>&nbsp;from&nbsp;<?php echo $_POST["department"]; ?> class En-no <?php echo $_POST["eno"]; ?>.I have to attend a <?php echo $_POST["reason"]; ?> <?php echo $data ; ?>.So, I request you to grant my leave.
<!-- Application greet -->
<br><br>
Awaiting your favourable reply,Thank you.
<br><br>
<!-- Application over -->
Yours Faithfully,<br>
<?php echo $_POST["name"]; ?>,<br>
<?php echo $_POST["eno"]; ?>
</div>
<!-- Application Footer -->
<div style="text-align:right;margin-right:30px;">Signature&nbsp;<?php echo $_POST["to"]; ?></div>
<div style="text-align:right;margin-right:30px;"><?php echo $_POST["department"]; ?>&nbsp;Department</div>
<br/><br/>
<p style="margin-left:35px">Remarks:</p>
</body>
</html>

<?php

$body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0, 0, 0, 0, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
 
        //output pdf
        //$mpdf->Output('demo.pdf','D');

        //open in browser
        $mpdf->Output();

        //save to server
        //$mpdf->Output("mydata.pdf",'F');
?>
