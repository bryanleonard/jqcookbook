<html>
<head>
	<meta charset="UTF-8">
	<title>Basic validation</title>

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
			position: absolute;
			bottom: -15px;
			left: 30%;
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
		<h1 class="page-header">Basic validation</h1>
	</hgroup>


<form id="webForm" method="POST">
	<div class="header">
		<h3>Register</h3>
	</div>

	<div class="alert alert-danger hiddenz" role="alert">
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
		<label for="confirmPassword">Confirm
		Password:</label>
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
		,isError = false
	;

	// Remove old errors
	$('.input-frame').removeClass('error');
	$('.error-data').remove();

	//pg 160
})

</script>

</body>
</html>