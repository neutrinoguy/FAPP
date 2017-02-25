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

/* Ribbon Fork */

.ribbonFork {
  background-color: #ff1823;
  overflow: hidden;
  white-space: nowrap;
  position: absolute;
  left: 88%;
  top: 40px;
  z-index: 9999;
  -webkit-transform: rotate(45deg);
     -moz-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
       -o-transform: rotate(45deg);
          transform: rotate(45deg);
}
.ribbonFork a {
  border: 1px solid #faa;
  color: #fff;
  display: block;
  font: bold 81.25% Verdana, Helvetica, Arial, sans-serif;
  font-size: 12px;
  margin: 1px 0;
  padding: 10px 50px;
  text-align: center;
  text-decoration: none;
  text-shadow: 0 0 5px #444;
}


@media (max-width: 767px) {

  .ribbonFork {
  background-color: #ff1823;
  overflow: hidden;
  white-space: nowrap;
  position: absolute;
  left: 60%;
  top: 30px;
  z-index: 9999;
  -webkit-transform: rotate(45deg);
     -moz-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
       -o-transform: rotate(45deg);
          transform: rotate(45deg);
}
.ribbonFork a {
  border: 1px solid #faa;
  color: #fff;
  display: block;
  font: bold 81.25% Verdana, Helvetica, Arial, sans-serif;
  font-size: 10px;
  margin: 1px 0;
  padding: 10px 50px;
  text-align: center;
  text-decoration: none;
  text-shadow: 0 0 5px #444;
}

}


</style>


  </head>

  <body style="background-image:url('img/black2.jpg');">


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
        
          <a class="navbar-brand" href="#" style="font-size:50px" >FAPP</a>

        
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
                <li><a href="/FAPP/tech.php">Techevent</a></li>
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