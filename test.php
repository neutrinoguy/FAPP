<?php 


$datetime1 = new DateTime("20-06-2010");

$datetime2 = new DateTime("20-06-2010");


$difference = $datetime1->diff($datetime2);

echo 'Difference: '.$difference->d.'days, '  
                   .$difference->m.' months, ' 
                   .$difference->y.' year';;

	if(	$difference->d == '0' && $difference ->m == '0' && $difference->y == '0') {

			echo "on";
	}

	else {

		echo "From to" ;
	}

?>

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


