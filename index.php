<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>FAPP</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    

     <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">


<style>
.typed-cursor{

    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}

</style>


  </head>

  <body style="background-image:url('img/black2.jpg');">


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
        
          <a class="navbar-brand" href="#" style="font-size:50px" >FAPP<span style="font-size:15px;font-family:verdana;">~Fast Application</span></a>

        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="credits.php">Credits</a></li>
                </ul>
                
  </div>      
</div>

    </nav>

      <div class="ribbonFork">
                                <a href="https://github.com/neutrinoguy/FAPP/">Fork me on Github</a>
                            </div>

    <div class="container">

        <div class="starter-template">
            <h1><b>You are writing application for</b>&nbsp;<span style="color:#02f7b6" class="element"></span></h1>

            <br />

        <div class="btn-group">

              <a href="javascript:void(0)" class="btn btn-warning btn-raised" data-toggle="dropdown">Reason of Application</a>
              <a href="#" data-target="#" class="btn btn-warning btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Techevent</a></li>
                <li><a href="/FAPP/m.php">Marriage</a></li>
              </ul>
            </div>

</div>
<br />
<br />
<br />
<h4><b>Didn't find the application you are looking for?&nbsp;</b><a href="https://goo.gl/forms/jzMLDHztY0zr2Bxy1"><b style="color:#29bc2b">Submit a request here</b></a></h4>
</div><!-- /.container -->
<br />
<br />
<br />
<footer>
<h6><b>Made with&nbsp;<img class="heart" src="img/heart.png" />&nbsp;at </b><span style="font-size:20px;color:red"><b>SVBIT</b></span></h6>
</footer>







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
    <script>
    $(function(){
        $(".element").typed({
            strings: ["Techevent", "Marraige"],
            typeSpeed: 0 ,
            loop: true ,
            typeSpeed: 100
        });
    });
</script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>



  <iframe id="iframe-widget" allowfullscreen="" src="" width="300" height="250" frameborder="0"></iframe>


</div>



</body>
</html>

<?php

//if(isset($_POST['submit'])){
    //header('Location: '.$_POST['reason']);
    //exit;
//}
?> 