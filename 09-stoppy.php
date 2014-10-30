<html>
<head>
	<meta charset="UTF-8">
	<title>Sliding stuff</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		.frame {
			width: 600px;
			margin: auto;
			background-color: #CCC;
			padding: 10px;
		}
		.actions {
			padding: 10px;
			background-color: #333;
			text-align: center;
		}
		.slideMe {
			background-color: green;
			height: 150px;
			margin-top: 10px;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Sliding stuff</h1>
	</hgroup>


<div class="frame">
	<div class="actions">
		<button id="slide">Slide</button>
		<button id="stop">Stop</button>
		<button id="finish">Finish</button>
	</div>
	<ul class="output"></ul>
	<div class="slideMe"></div>
</div>

			</div>
		</div>

	</div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
<!-- <script src="scripts.js"></script> -->

<script>

$('#slide').on('click', function() {
	$('.slideMe').slideToggle(1000, function() {
		$('.output').empty().append("<li>Slide effect done</li>");
	});
});

$('#stop').on('click', function() {
	$('.slideMe').stop();
})

$('#finish').on('click', function() {
	$('.slideMe').finish();
})


</script>

</body>
</html>