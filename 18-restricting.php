<html>
<head>
	<meta charset="UTF-8">
	<title>Restricting input vals</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>


		label {
			min-width: 75px;
			text-align: right;
		}
		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-6 col-xs-push-2">
	
	<hgroup>
		<h1 class="page-header">Restricting input vals</h1>
	</hgroup>

<div class="input-frame form-group">
	<label for="username">Username: </label>
	<input type="text" name="username" id="username">
</div>

<div class="input-frame form-group">
	<label for="password">Password: </label>
	<input type="text" name="password" id="password">
</div>

<div class="actions form-group">
	<label></label>
	<button class="btn btn-primary submit-btn">Submit</button>
</div>


			</div>
		</div>

	</div>
</div>


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="/assets/lib/jquery-1.11.1.js"></script>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script> -->
<!-- <script src="scripts.js"></script> -->

<script>

$('#username').on('keypress', function(event) {
	var key = String.fromCharCode(event.which);
	
	if (/[^a-zA-Z\d\s:]/.test(key)) {
		event.preventDefault();
		return false;
	}
});


</script>

</body>
</html>