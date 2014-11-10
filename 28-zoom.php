<html>
<head>
	<meta charset="UTF-8">
	<title>Photo Zoom</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
		.photos {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		.photos li {
			display: inline-block;
			width: 225px;
			height: 200px;
			overflow: hidden;
			margin: 0 5px 5px 0;
			position: relative;
			cursor: pointer;
		}

		.photos img {
			top: -50%;
			left: -75%;
			position: absolute;
			opacity: 0.5;
		}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Photo Zoom</h1>
	</hgroup>


<ul class="photos">
	<li><img src="imgs/zoom0.jpg" alt=""></li>
	<li><img src="imgs/zoom1.jpg" alt=""></li>
	<li><img src="imgs/zoom2.jpg" alt=""></li>
	<li><img src="imgs/zoom3.jpg" alt=""></li>
</ul>

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
// pg 253

var images = []

$('.photos').find('li').on('mouseover', function() {
	var img = $(this).find('img');
	img.finish(); // stop animation
	images[$(this).index()] = {
		width:  img.width(),
		height: img.height()
	};

	img.animate({
		width: '290px',
		height: '250px',
		top: 0,
		left: 0,
		opacity: 1.0
	});


})

.on('mouseout', function() {
	var img = $(this).find('img');
	img.finish(); // stop animation
	
	img.animate({
		width: images[$(this).index()].width + "px",
		height: images[$(this).index()].height + "px",
		top: '-50%',
		left: '-75%',
		opacity: 0.5
	});
});


</script>

</body>
</html>