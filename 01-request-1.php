<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-6">
				<h1>Famous <br />Einstein Quotes</h1>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6">		
				<button class="refresh btn btn-primary">Get Quote</button>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6">
				<h4 class="quote"></h4>
			</div>
		</div>

	</div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
<!-- <script src="scripts.js"></script> -->

<script>
	
$('.refresh').on('click', function() {
	$.ajax({
		url: 'scripts/request-1.php',
		type: 'GET',
		
	}).done(function(data) {
		$('.quote').text(data);
	}).fail(function(data) {
		$('.quote').text("DOH!");
	});
})

</script>

</body>
</html>