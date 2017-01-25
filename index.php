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

    
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
          <a class="navbar-brand" href="#" >Fast Application-FAPP</a>
        
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
         
         <h1>Simple Leave application</h1>


<form action="" method="post">
<select name="reason">
<option value="/FAPP/techevent.php">Techevent</option>
<option value="/FAPP/marriage.php">Marraige</option>
</select>
<input type="submit" name="submit" value="Go" />
</form>



        
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    

  <iframe id="iframe-widget" allowfullscreen="" src="" width="300" height="250" frameborder="0"></iframe>

</div>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    header('Location: '.$_POST['reason']);
    exit;
}
