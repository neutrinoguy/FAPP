<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>FAPP</title>
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
<link href="css/datepicker.css" rel="stylesheet">
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
<body style="background-image:url('img/black.jpg');">
	<div class="container">
<div class="starter-template">
<form class="form-horizontal" action="app.php" method="post"  id="marriage" autocomplete="off">
<fieldset>

<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">face</i></span>
    <input class="form-control" id="#" placeholder="Name" name="name" type="text">
	</div>
</div>

<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">forward</i></span>
    <input class="form-control" id="#" placeholder="To" name="to" type="text">
	</div>
</div>


<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">date_range</i></span>
    <input class="form-control" id="dpd1" placeholder="From Date" name="from_date" readonly="readonly"  type="text">
	</div>
</div>

<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">date_range</i></span>
    <input class="form-control" id="dpd2" placeholder="To Date" name="to_date" readonly="readonly" type="text">
	</div>
</div>


<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">account_balance</i></span>
    <input class="form-control" id="#" placeholder="Department" name="department" type="text">
	</div>
</div>

<div class="form-group label-static">
   <div class="input-group"> <span class="input-group-addon"><i class="material-icons">explicit</i></span>
    <input class="form-control" id="#" placeholder="Enrollment number" name="eno" type="text">
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
  if (top.location != location) {
    top.location.href = document.location.href ;
  }
    $(function(){
      window.prettyPrint && prettyPrint();
      
        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          format: 'dd-mm-yyyy',
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate());
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          format: 'dd-mm-yyyy',
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });
  </script>
  <!-- Date Validation end -->
</body>
</html>