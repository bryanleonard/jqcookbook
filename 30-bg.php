<html>
<head>
	<meta charset="UTF-8">
	<title>Animated BGs</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>

	body {
		background: #333
	}
		
		.background {
			background: url(imgs/bg0.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
		}

		.text-frame {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
		}
		.text-inner {
			width: 600px;
			margin: 15% auto auto auto;
			background-color: rgba(0, 0, 0, 0.78);
			padding: 20px;
			color: #E1E1E1;
			border-radius: 5px;
		}
		.text-inner h1 {
			margin: 0;
			padding: 0;
		}
		.text-inner p {
			font-size: 22px;
			line-height: 30px;
			margin: 5px 0 5px 0;
			color: #CCC;
		}

	</style>
</head>
<body>
<div class="background">

	<div class="container">
		<div class="container-fluid">
			
			<div class="row">

				<div class="col-xs-12">
		
		<hgroup>
			<h1 class="page-header">Animated BGs</h1>
		</hgroup>

	<!-- <div class="background"></div> -->
	<div class="text-frame">
		<div class="text-inner">
			<h1>BACKGROUND IMAGE ANIMATION</h1>
			<p>This recipe shows you how to alternate the
			background image of an element using jQuery
			animations.</p>
		</div>
	</div>

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

var imgs = ['imgs/bg0.jpg', 'imgs/bg1.jpg', 'imgs/bg2.jpg', 'imgs/bg3.jpg'];
var index = 0;

setInterval(function() {
	if (index >= imgs.length) { index = 0; }

	$('.background').animate({
		opacity: 0
	}, 1500, function() {
		$(this).css({
			'background-image': "url('" + imgs[index] +"')"
		}).animate({
			opacity: 1
		}, 1500);
		index++;
	})

}, 4000);

</script>

</body>
</html>