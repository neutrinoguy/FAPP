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
         
         <h1>Leave application for Tech event</h1>


            <form class="form-horizontal" role="form" method="post" action="application.php">
          <div class="form-group">
            <label for="to" class="col-sm-2 control-label">To</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="to" name="to" placeholder="The Class Co-ordinator" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="department" class="col-sm-2 control-label">Department</label>
            <div class="col-sm-10">
              <input type="department" class="form-control" id="department" name="department" placeholder="Computer/IT" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="Raj Patel" value="">
            </div>
          </div>

          
          <div class="form-group">
            <label for="en-no" class="col-sm-2 control-label">Enrollment-No</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="en-no" name="en-no" placeholder="140750107037" value="">
            </div>
          </div>

	
          <div class="form-group">
            <label for="reason" class="col-sm-2 control-label">Reason</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="reason" name="reason" placeholder="Tech event" value="Techevent" >
            </div>
          </div>




          <div class="form-group">
            <label for="from_date" class="col-sm-2 control-label">From</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="from_date" name="from_date" placeholder="12/01/17" value="">
            </div>
          </div>


          <div class="form-group">
            <label for="to_date" class="col-sm-2 control-label">To</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="to_date" name="to_date" placeholder="18/01/17" value="">
            </div>
          </div>

          
      


          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Generate" class="btn btn-primary">
            </div>
          </div>
          
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
