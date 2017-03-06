<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>FAPP</title>




<!--

 ______________________________________
/ Welcome by Guardian of FAPP. Seeing  \
| source code is a good thing to learn |
| new things. Your are on the path of  |
\ being a developer. Best of luck ~fapp/
 --------------------------------------
   \
    \
         _____
       .'/L|__`.
      / =[_]O|` \
      |"+_____":|
    __:='|____`-:__
   ||[] ||====| []||
   ||[] | |=| | []||
   |:||_|=|U| |_||:|
   |:|||]_=_ =[_||:| LS
   | |||] [_][]C|| |
   | ||-'"""""`-|| |
   /|\\_\_|_|_/_//|\
  |___|   /|\   |___|
  `---'  |___|  `---'
         `---'




-->















<!-- Meta Tags -->
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Aagam Shah">
<!-- Link Tags -->
<link rel="icon" href="img/favicon.ico">
<link href="css/bootstrap-datepicker.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet">
 <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap Material Design -->
  <link href="css/bootstrap-material-design.css" rel="stylesheet">
  <link href="css/ripples.min.css" rel="stylesheet">
</head>
<body style="background-image:url('img/back4.jpg');">
	<div class="container">
<div class="starter-template">


<form class="form-horizontal" action="app.php" method="post"  id="marriage" autocomplete="off">
<fieldset>

<legend style="font-family:verdana">Leave Application For Marriage</legend>





<div class="form-group">
  <div class="col-sm-6  inputGroupContainer">
    <div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">face</i></span>
    <input class="form-control" id="" placeholder="Name" name="name" type="text"> 
	</div>
</div>
</div>

<div class="col-sm-6  inputGroupContainer">
    <div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">explicit</i></span>
    <input class="form-control" id="#" placeholder="Enrollment number" name="eno" type="text">   
  </div>
</div>
</div>

</div>




<div class="form-group">

<div class="col-sm-6  inputGroupContainer">
<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">forward</i></span>
    <input class="form-control" id="#" placeholder="To" name="to" type="text">
	</div>
</div>
</div>


<div class="col-sm-6  inputGroupContainer">
<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">account_balance</i></span>
    <input class="form-control" id="#" placeholder="Department" name="department" type="text">
  </div>
</div>
</div>
</div>

<div class="form-group">
  <div class="col-sm-6 inputGroupContainer">
<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">date_range</i></span>
    <input class="form-control" id="dpd1" placeholder="From Date" name="from_date" readonly="readonly"  type="text">
  </div>
</div>
</div>



<div class="col-sm-6 inputGroupContainer">
<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">date_range</i></span>
    <input class="form-control" id="dpd2" placeholder="To Date" name="to_date" readonly="readonly" type="text">
  </div>
</div>
</div>
</div>



<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">event_note</i></span>
    <input class="form-control" id="#" placeholder="Reason" name="reason" type="text" value="Marriage">
	</div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-raised btn-success">Generate<span class="glyphicon glyphicon-send"></span></button>
          <button type="reset" class="btn btn-raised btn-warning">Reset<span class="glyphicon glyphicon-repeat"></span></button>
        </div>
      </div>




</fieldset>
</form>
</div>
</div>
<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrapvalidator.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/p.js"></script>
<script src="js/index.js"></script>
<script src="js/ripples.min.js"></script>
<script src="js/material.min.js"></script>
<script>
  $.material.init();
</script>

<!-- Form Validation -->

	<script type="text/javascript">

		$(document).ready(function() {
    $('#marriage').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
        	to: {
        		validators: {
        			stringLength: {
        				min: 3,
        			},
        				notEmpty: {
        					message: 'Enter valid to Value'
        				}
        		}
        	},

        	department: {
        		validators: {
        			stringLength: {
        				min: 2,
        			},
        				notEmpty: {
        					message: 'Enter Department Value'
        				}
        		}
        	},

        	reason: {
        		validators: {
        			stringLength: {
        				min: 2,
        			},
        				notEmpty: {
        					message: 'Enter Valid Reason'
        				}
        		}
        	},

        	from_date: {
        		validators: {
        			stringLength: {
        				min: 2,

        			},
        				notEmpty: {
        					message: 'Enter valid from date'
        				}
        		}
        	},

        	to_date: {
        		validators: {
        			stringLength: {
        				min: 2,
        			},
        				notEmpty: {
        					message: 'Enter valid to date'
        				}
        		}
        	},

        	name: {
        		validators: {
        			stringLength: {
        				min: 2,
        			},
        				notEmpty: {
        					message: 'Give name Value'
        				}
        		}
        	},

        	eno: {
        		validators: {
        			stringLength: {
        				min: 12,
        			},
        				notEmpty: {
        					message: 'Give valid Enrollment-No'
        				}
        		}
        	},

		}
})


	.on('success.form.bv', function(mr) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#marriage').data('bootstrapValidator').resetForm();

            // Prevent form submission
            mr.preventDefault();

            // Get the form instance
            var $form = $(mr.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

</script>
<!-- Form validation end -->

<!-- Date validation -->
<script>
var startDate = new Date('01/01/2012');
var FromEndDate = new Date();
var ToEndDate = new Date();

ToEndDate.setDate(ToEndDate.getDate()+365);

$('#dpd1').datepicker({
    format: 'dd-mm-yyyy' ,
    weekStart: 1,
    startDate: '01/01/2012',
    endDate: FromEndDate, 
    autoclose: true
})
    .on('changeDate', function(selected){
        startDate = new Date(selected.date.valueOf());
        startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
        $('#dpd2').datepicker('setStartDate', startDate);
    }); 
$('#dpd2')
    .datepicker({
        format: 'dd-mm-yyyy' ,
        weekStart: 1,
        startDate: startDate,
        endDate: ToEndDate,
        autoclose: true
    })
    .on('changeDate', function(selected){
        FromEndDate = new Date(selected.date.valueOf());
        FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
        $('#dpd1').datepicker('setEndDate', FromEndDate);
    });    
        

</script>
  <!-- Date Validation end -->
</body>
</html>