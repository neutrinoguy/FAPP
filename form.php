<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>FAPP</title>


<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="css/propeller.min.css">

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="css/propeller-admin.css">

<!-- favicon --> 
	<link rel="icon" href="http://propeller.in/assets/images/favicon.ico" type="image/x-icon">
	
	<!-- Bootstrap --> 
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet" /> 
	
	<!-- Example docs (CSS for helping component example file)-->
	<link href="http://propeller.in/docs/css/example-docs.css" type="text/css" rel="stylesheet" />
	
	<!-- Propeller card (CSS for helping component example file)-->
	<link href="http://propeller.in/components/card/css/card.css" type="text/css" rel="stylesheet"/>

	<!-- Propeller typography -->
	<link href="http://propeller.in/components/typography/css/typography.css" type="text/css" rel="stylesheet" />
	
	<!-- Propeller textbox -->
	<link href="http://propeller.in/components/textfield/css/textfield.css" type="text/css" rel="stylesheet"/>

	<!-- Select2 css -->
	<link href="css/select2.min.css" type="text/css" rel="stylesheet"/>
	<link href="css/select2-bootstrap.css" type="text/css" rel="stylesheet"/>
	
	<!-- Propeller Select2 css -->
	<link href="css/pmd-select2.css" type="text/css" rel="stylesheet"/>

	<link href="css/button.css" type="text/css" rel="stylesheet"/>

  <!-- Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="http://propeller.in/components/icons/css/google-icons.css" type="text/css" rel="stylesheet" />

	<!-- Propeller textbox -->
	<link href="http://propeller.in/components/textfield/css/textfield.css" type="text/css" rel="stylesheet"/>

	<!-- Propeller bootstrap datetimepicker -->
	<link href="http://propeller.in/components/datetimepicker/css/bootstrap-datetimepicker.css" type="text/css" rel="stylesheet" />
	
	<!-- ProDatatable -->
	<link href="css/pmd-datetimepicker.css" type="text/css" rel="stylesheet"/>

<!-- Styles Ends -->
</head>

<body>
<!-- Header Starts -->
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

	<div class="container-fluid">
		<div class="pmd-navbar-right-icon pull-right navigation">

			
	
		</div>
	</div>

</nav><!--End Nav bar -->
<!-- Header Ends -->
<!--Form-->

<!--<body background="../img/2.jpg">-->

<form action="application.php" method="post">
<div class="pmd-content pmd-content-custom" id="content"> 
    <div class="container">
		
		<!-- To Input -->
        <div class="form-group pmd-textfield">
            <label for="text-to" class="control-label">Name</label>
            <input type="text" id="text-to" class="form-control">
        </div>
    <!-- Department Input -->
        <div class="form-group pmd-textfield">
            <label for="text-department" class="control-label">Department Name</label>
            <input id="text-department" class="form-control" type="text">
        </div>
<!--Name Text Input -->
        <div class="form-group pmd-textfield">
            <label for="text-name" class="control-label">Name</label>
            <input id="text-name" class="form-control" type="text">
        </div>

<!-- E -no -->
        <div class="form-group pmd-textfield">
            <label for="text-e-no" class="control-label">Enrollment No</label>
            <input id="text-e-no" class="form-control" type="text">
        </div>
<!-- Reason Input -->
        <div class="form-group pmd-textfield">
            <label for="text-reason" class="control-label">Reason</label>
            <input id="text-reason" class="form-control" type="text" value="<?php echo $_POST["reason"]; ?>">
        </div>
<!-- date Input -->
        <div class="row">
	          <div class="col-sm-6"> 
		            <div class="form-group pmd-textfield pmd-textfield-floating-label">
			              <label class="control-label" for="regular1">Start Date</label>
			              <input type="text" class="form-control" id="datepicker-start">
		            </div>
	          </div>
	          <div class="col-sm-6"> 
		              <div class="form-group pmd-textfield pmd-textfield-floating-label">
			                <label class="control-label" for="regular1">End Date</label>
			                <input type="text" class="form-control" id="datepicker-end">
		              </div>
	          </div>
        </div>
      </div>
   <button type="submit" class="btn pmd-ripple-effect btn-primary"> Next </button >
                
</div> <!--container end --> 
</form>


<!-- Scripts Starts -->
<script src="js/jquery-1.12.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/propeller.min.js"></script>

<!-- Propeller textfield js -->
<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

<!-- Datepicker moment with locales -->
<script type="text/javascript" language="javascript" src="http://propeller.in/components/datetimepicker/js/moment-with-locales.js"></script>

<!-- Propeller Bootstrap datetimepicker -->
<script type="text/javascript" language="javascript" src="http://propeller.in/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>


</body>
</html>