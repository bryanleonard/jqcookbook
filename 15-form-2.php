<html>
<head>
	<meta charset="UTF-8">
	<title>More basic validation</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
		.input-frame {
			margin: 1em 0;
		}

		label {
			min-width: 145px;
			text-align: right;
		}

		.error input {
			border: 1px solid #a94442;
			background-color: rgba(169, 68, 66, .05)
		}
		.error-data {
			color: #a94442;
			font-size: 11px;
			position: relative;
			bottom: 0;
			left: 150px;
		}

		.has-error input {
			border: 1px solid #a94442;
			background-color: rgba(169, 68, 66, .05)
		}
		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-8 col-xs-push-2">
	
	<hgroup>
		<h1 class="page-header">More basic validation</h1>
	</hgroup>


<form id="webForm" method="POST">
	<div class="header">
		<h3>Register</h3>
	</div>

	<div class="alert alert-danger hidden" role="alert">
		<p><b>The following errors occurred.</b></p>
		<ul><li>hi</li></ul>
	</div>

	<div class="input-frame form-group">
		<label for="firstName">First Name:</label>
		<input name="firstName" id="firstName" type="text" class="required" />
	</div>

	<div class="input-frame form-group">
		<label for="lastName">Last Name:</label>
		<input name="lastName" id="lastName" type="text" class="required" />
	</div>

	<div class="input-frame form-group">
		<label for="email">Email:</label>
		<input name="email" id="email" type="text" class="required email" />
	</div>

	<div class="input-frame form-group">
		<label for="number">Telephone:</label>
		<input name="number" id="number" type="text" class="number" />
	</div>

	<div class="input-frame form-group">
		<label for="dob">Date of Birth:</label>
		<input name="dob" id="dob" type="text" class="required date" placeholder="DD/MM/YYYY"/>
	</div>

	<div class="input-frame form-group">
		<label for="creditCard">Credit Card #:</label>
		<input name="creditCard" id="creditCard" type="text" class="required credit-card" />
	</div>

	<div class="input-frame form-group">
		<label for="password">Password:</label>
		<input name="password" id="password" type="password" class="required" />
	</div>

	<div class="input-frame form-group">
		<label for="confirmPassword">Confirm Password:</label>
		<input name="confirmPassword" id="confirmPassword" type="password" class="required" />
	</div>

	<div class="actions">
		<label></label>
		<button  class="submit-btn btn btn-primary">Submit</button>
	</div>
</form>


			</div>
		</div>

	</div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
<!-- <script src="scripts.js"></script> -->

<script>


$('.submit-btn').on('click', function(e) {
	e.preventDefault();

	var inputs = $('input')
		// ,isError = false
	;

	for (var i=0; i < inputs.length; i++) {
	    doValidation(inputs[i]);
	};

	// if (isError === false) {
	// 	alert("Form submitted");
	// };
	if ($('.error-data').length == 0) {
		//No errors, submit the form
		alert("Form submitted");
	};
});

$('input').on("keyup", function(){
	doValidation($(this));
});

var doValidation = function(input)  {
	var $input = $(input);

	$input.parent().removeClass('error');
	$input.next('.error-data').remove();

	 if ($input.hasClass('required') && !validationRequired( $input.val() )) {
	    	addErrorData( $(input), "This is required and stuff. Fill it in." );
	    	// isError = true;
	    };

    if ($input.hasClass('number') && !validationNumber( $input.val() )) {
    	addErrorData( $(input), "This one needs only numbers." );
    	// isError = true;
    };

    if ($input.hasClass('credit-card') && !validationCreditCard( $input.val() )) {
		addErrorData($(input), "Invalid credit card number");
		// isError = true;
	};

	if ($input.hasClass('date') &&
		!validateDate($(input).val())) { addErrorData($(input), "Invalid date provided");
		// isError = true;
	};

	if ($(input).hasClass('email') && !validateEmail($($(input)).val())) {
		addErrorData($(input), "Invalid email address provided.");
		// isError = true;
	};

}



var validationRequired = function(value) {
	if (value == "") return false;
	return true
};

var validationNumber = function(value) {
	if (value != "") {
		return !isNaN(parseInt(value, 10)) && isFinite(value);
		//isFinite, in case letter is on the end
	}
	return true;
}

var validationCreditCard = function(value) {
	if (value != "") {
		return /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/.test(value);
	}
	return true;
};

var validateDate = function(value) {
if (value != "") {
	if (/^\d{2}([.\/-])\d{2}\1\d{4}$/.test(value)) {
		// Remove leading zeros
		value = value.replace(/0*(\d*)/gi,"$1");
		
		var dateValues = value.split(/[\.|\/|-]/);
		// Correct the month value as month index starts at 0 now 1 (e.g. 0 = Jan, 1 = Feb)
		dateValues[1]--;
		var date = new Date(dateValues[2], dateValues[1],
		dateValues[0]);
		if (
			date.getDate() == dateValues[0] &&
			date.getMonth() == dateValues[1] &&
			date.getFullYear() == dateValues[2]
			) {
			return true;
		}
	}
		return false;
	} else {
		return true;
	}
};

function validateEmail(value) {
	if (value != "") {
		// return /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i.test(value);
		return /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i.test(value);
	}
	return true;
};

var addErrorData = function(el, err) {
	el.parent().addClass('error');
	el.after('<div class="error-data">' + err + "</div");
};

</script>

</body>
</html>