
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
<title>Application</title>
</head>
<body>
<div dir="ltr" style="text-align: left;" trbidi="on">
<img style="" src="img/banner.jpeg" />
<br />
<br />
<br />
&nbsp;&nbsp;To,<br />
&nbsp;&nbsp;<?php echo $_POST["to"]; ?><br />
&nbsp;&nbsp;<?php echo $_POST["department"]; ?> Department,<br />
&nbsp;&nbsp;SVBIT, Vasan.<br />
<br />
&nbsp;Date : <?php echo date("d/m/Y"); ?><br />
<div style="text-align: center;">
&nbsp;&nbsp;<b>Subject: Application for Leave</b></div>
<div style="text-align: center;">
<br /></div>
&nbsp;Respected Sir/Madam,<br />
<br />
&nbsp;Myself,<?php echo $_POST["name"]; ?> from <?php echo $_POST["department"]; ?> class En-no <?php echo $_POST["eno"]; ?>.I have to attend a <?php echo $_POST["reason"]; ?> <?php echo $data ; ?>.So, I request you to grant my leave.
<br />
<br />
&nbsp;Awaiting your favourable reply,Thank you.<br />
</div>
<br />
<div style="text-align: center;">
</div>
&nbsp;Yours Faithfully,<br />
&nbsp;<?php echo $_POST["name"]; ?><br />
&nbsp;<?php echo date("d/m/Y"); ?></div>
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


