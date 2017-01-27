<!DOCTYPE html>
<html lang="en"><head>
 
    <meta charset="utf-8">
    <link href="css/datepicker.css" rel="stylesheet">
    <script src="js/p.js"></script>
    

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
         
         <h1>Leave application for Marriage</h1>


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
              <input type="text" class="form-control" id="reason" name="reason" placeholder="Tech event" value="Marriage" >
            </div>
          </div>



          <div class="form-group">
            <label for="from_date" class="col-sm-2 control-label">From</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="dp1" name="from_date" placeholder="12/01/17" value="">
            </div>
          </div>
          

          
          <div class="form-group">
            <label for="to_date" class="col-sm-2 control-label">To</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="dp2" name="to_date" placeholder="18/01/17" value="">
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


<script src="js/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
<script>
  if (top.location != location) {
    top.location.href = document.location.href ;
  }
    $(function(){
      window.prettyPrint && prettyPrint();
      $('#dp1').datepicker({
        format: 'dd-mm-yyyy'
      });

      $('#dp2').datepicker({
        format: 'dd-mm-yyyy'
      });
      $('#dp3').datepicker();
      $('#dp3').datepicker();
      $('#dpYears').datepicker();
      $('#dpMonths').datepicker();
      
      
      var startDate = new Date(2012,1,20);
      var endDate = new Date(2012,1,25);
      $('#dp4').datepicker()
        .on('changeDate', function(ev){
          if (ev.date.valueOf() > endDate.valueOf()){
            $('#alert').show().find('strong').text('The start date can not be greater then the end date');
          } else {
            $('#alert').hide();
            startDate = new Date(ev.date);
            $('#startDate').text($('#dp4').data('date'));
          }
          $('#dp4').datepicker('hide');
        });
      $('#dp5').datepicker()
        .on('changeDate', function(ev){
          if (ev.date.valueOf() < startDate.valueOf()){
            $('#alert').show().find('strong').text('The end date can not be less then the start date');
          } else {
            $('#alert').hide();
            endDate = new Date(ev.date);
            $('#endDate').text($('#dp5').data('date'));
          }
          $('#dp5').datepicker('hide');
        });

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });
  </script>

</body>
</html>

