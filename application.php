<!DOCTYPE html>
<head>
<title>Application</title>
</head>
<body>
<div dir="ltr" style="text-align: left;" trbidi="on">
To,<br />
<?php echo $_POST["text-to"]; ?><br />
<?php echo $_POST["text-department"]; ?> Department,<br />
SVBIT, Vasan.<br />
<br />
Date :<?php echo date("m/d/Y"); ?><br />
<div style="text-align: center;">
<b>Subject: Application for Leave</b></div>
<div style="text-align: center;">
<br /></div>
Respected Sir/Madam,<br />
<br />
Myself,<?php echo $_POST["text-name"]; ?> from <?php echo $_POST["text-department"]; ?> class En-no <?php echo $_POST["text-e-no"]; ?>.I have to attend a <?php echo $_POST["text-reason"]; ?> from <?php echo $_POST["datepicker-start"]; ?> to <?php echo $_POST["datepicker-end"]; ?>.So, I request you to grant my leave for given dates.
<br />
<br />
Awaiting your favourable reply,Thank you.<br />
</div>
<br />
<div style="text-align: center;">
</div>
Yours Faithfully,<br />
<?php echo $_POST["name"]; ?><br />
<?php echo date("m/d/Y"); ?></div>
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