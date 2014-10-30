<html>
<head>
	<meta charset="UTF-8">
	<title>Sliding stuff</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		.frame {
			width: 550px;
			height: 210px;
			margin: 50px auto auto auto;
			background-color: #E1E1E1;
			padding: 10px;
		}
		.frame .box {
			width: 125px;
			height: 125px;
			float: left;
			margin-right: 10px;
		}
		.frame .box:last-child {
			margin-right: 0;
		}
		.frame .actions {
			background-color: #333333;
			margin-bottom: 10px;
			text-align: center;
			padding: 10px;
		}
		.frame .actions button {
			height: 35px;
		}
		.one {
			background-color: red;
		}
		.two {
			background-color: green;
		}
		.three {
			background-color: blue;
		}
		.four {
			background-color: orange;
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
		<button id="down" class="btn btn-primary">Slide Down</button>
		<button id="up"   class="btn btn-primary">Slide Up</button>
	</div>
	<div class="box one"></div>
	<div class="box two"></div>
	<div class="box three"></div>
	<div class="box four"></div>
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


	$('#up').on('click', function() {
		$('.one').slideUp(400);
		$('.two').slideUp(300);
		$('.three').slideUp(200);
		$('.four').slideUp(100);
	});

	$('#down').on('click', function() {
		$('.one').slideDown(400);
		$('.two').slideDown(300);
		$('.three').slideDown(200);
		$('.four').slideDown(100);
	})
 




</script>

</body>
</html>