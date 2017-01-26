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
	
    
</head>

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
<body background="../img/1.jpg">
<div class="pmd-content pmd-content-custom" id="content"> 
	<div class="container">
		
		<!-- Selectbox -->
		<section class="row component-section">
		
			<!-- selectbox title and description -->
			<div class="col-md-3">
				<div id="selectbox">
					<h2>FAPP!!</h2>
				</div>
				
			</div> <!-- selectbox title and description end-->
			

			</div>

			<!-- selectbox code and example -->
			<form action="form.php" method="post">
			<div class="col-md-6">
				<div class="component-box">
					<!-- selectbox example -->
					<div class="row toggle-button-custom">
						<div class="col-md-6">
							<div class="pmd-card pmd-z-depth pmd-card-custom-form">
								<div class="pmd-card-body"> 
									<!--Simple select -->
									<div class="form-group pmd-textfield pmd-textfield-floating-label">
										<label>Reason</label>
										<select class="select-simple form-control pmd-select2" name="reason">
											<!--<option></option> -->
											<option>Marriage</option>
											<option>Sick</option>
											<option>Tour</option>
											<option>custom</option>
											<option>Chicago Bears</option>
											<option>Detroit Lions</option>
											<option>Green Bay Packers</option>
											
										</select>
									</div>
									
								</div>
							</div>
						</div>
					</div> <!-- selectbox example end-->
				</div>
				<button type="submit" class="btn pmd-ripple-effect btn-primary"> Next </button >
                </form>
				<?php
				if(isset($_POST['submit'])){
				$selected_val = $_POST['reason'];  // Storing Selected Value In Variable
				echo "You have selected :" .$selected_val;  // Displaying Selected Value
				}
				?>
                
		</section>	

</div> <!--container end --> 



<!-- Scripts Starts -->
<script src="js/jquery-1.12.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/propeller.min.js"></script>

<!-- Dropdown hover js -->
<script src="js/bootstrap-hover-dropdown.js"></script>
<script>
	// very simple to use!
	$(document).ready(function() {
		$('.pmd-dropdown-hover').dropdownHover().dropdown();
	});
</script>

<!-- Propeller textfield js -->
<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

<!-- Select2 js-->
<script type="text/javascript" src="js/select2.full.js"></script>

<!-- Propeller Select2 -->
<script type="text/javascript">
	$(document).ready(function() {
		<!-- Select Multiple Tags -->
		$(".select-tags").select2({
			tags: false,
			theme: "bootstrap",
		})
		<!-- Simple Selectbox -->
		$(".select-simple").select2({
			theme: "bootstrap",
			minimumResultsForSearch: Infinity,
		});
		<!-- Selectbox with search -->
		$(".select-with-search").select2({
			theme: "bootstrap"
		});
		<!-- Select & Add Multiple Tags -->
		$(".select-add-tags").select2({
			tags: true,
			theme: "bootstrap",
		})
	});
</script>

<!-- Propeller Select2 -->
<script type="text/javascript" src="js/pmd-select2.js"></script>

</body>
</html>