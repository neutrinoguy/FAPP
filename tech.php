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
         
         

 <form class="form-horizontal" action="app.php" method="post"  id="marriage">
 	<fieldset>

 		<legend>Leave Application For Techevent</legend>

 	<div class="form-group">
        <label class="col-md-4 control-label">To</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="to" placeholder="The Class Co-ordinator" class="form-control"  type="text">
          </div>
        </div>
      </div>


     <div class="form-group">
        <label class="col-md-4 control-label">Department</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="department" placeholder="Computer" class="form-control" type="text">
          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label">Name</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="name" placeholder="Raj Patel" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">From-Date</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="from_date" id="dpd1" placeholder="01/02/2017" class="form-control" type="text" value="">
          </div>
        </div>
      </div>

       <div class="form-group">
        <label class="col-md-4 control-label">To-Date</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="to_date" id="dpd2" placeholder="09/02/2017" class="form-control" type="text" value="">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Enrollment-No</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
            <input name="eno" placeholder="140750107054" class="form-control" type="text">
          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label">Reason</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <input name="reason" placeholder="Techevent" class="form-control" type="text" value="Techevent">
          </div>
        </div>
      </div>

      

    
      
     
      	<div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-success" >Generate<span class="glyphicon glyphicon-send"></span></button>
          <button type="reset" class="btn btn-warning" >Reset<span class="glyphicon glyphicon-repeat"></span></button>
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
<!-- Validation over-->
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
          format: 'dd/mm/yyyy',
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
          format: 'dd/mm/yyyy',
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });
  </script>
<!-- Date validation -->
</body>
</html>








