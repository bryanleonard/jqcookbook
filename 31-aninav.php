<html>
<head>
	<meta charset="UTF-8">
	<title>Animated navigation</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
.navigation {
	margin: 0;
	padding: 0;
	list-style: none;
	background-color: #333;
	height: 50px;
}
.navigation li {
	float: left;
	position: relative;
}
.navigation li a {
	display: block;
	text-align: center;
	color: #FFF;
	text-decoration: none;
	overflow: hidden;
	height: 50px;
}
.navigation li a .nav-item {
	line-height: 50px;
	padding: 0 15px 0 15px;
	height: 50px;
}
.navigation li a .nav-item.hover {
	background-color: #ff3600;
}
.sub-nav {
	list-style: none;
	margin: 0;
	padding: 50px 0 0 0;
	opacity: 0;
	position: absolute;
	top: 0;
	left: -10000px;
	opacity: 0;
}
.sub-nav li {
	display: block;
	height: 40px;
}
.sub-nav li a {
	display: block;
	width: 120px;
	height: 40px;
	line-height: 40px;
	text-align: center;
	color: #FFF;
	background-color: #333333;
}
.sub-nav li a .sub-link-content {
	width: 240px;
}
.sub-nav li a .sub-nav-item {
	float: left;
	width: 120px;
}
.sub-nav li a .sub-nav-item.hover {
	background-color: #ff3600;
}
.down-arrow {
	width: 0;
	border-left: 7px solid transparent;
	border-right: 7px solid transparent;
	border-top: 7px solid white;
	display: inline-block;
	vertical-align: middle;
	margin: -5px 0 0 5px;
}		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Animated navigation</h1>
	</hgroup>

<ul class="navigation">
	<li>
		<a href="#" class="link-base">
			<div class="link-content">
				<div class="nav-item">HOME</div>
				<div class="nav-item hover">HOME</div>
			</div>
		</a>
	</li>
	<li>
		<a href="#" class="link-base">
			<div class="link-content">
				<div class="nav-item">
					ABOUT <div class="down-arrow"></div>
				</div>
				<div class="nav-item hover">
					ABOUT <div class="down-arrow"></div>
				</div>
			</div>
		</a>
		<ul class="sub-nav">
			<li>
				<a href="#">
					<div class="sub-link-content">
						<div class="sub-nav-item">SECTION 1</div>
						<div class="sub-nav-item hover">SECTION 1</div>
					</div>
				</a>
			</li>

			<li>
				<a href="#">
					<div class="sub-link-content">
						<div class="sub-nav-item">SECTION 2</div>
						<div class="sub-nav-item hover">SECTION 2</div>
					</div>
				</a>
			</li>

			<li>
				<a href="#">
					<div class="sub-link-content">
						<div class="sub-nav-item">SECTION 3</div>
						<div class="sub-nav-item hover">SECTION 3</div>
					</div>
				</a>
			</li>
			

		</ul>
	</li>
	<li>
		<a href="#" class="link-base">
			<div class="link-content">
				<div class="nav-item">CONTACT</div>
				<div class="nav-item hover">CONTACT</div>
			</div>
		</a>
	</li>
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

$('.navigation').find('.link-base')
	.on('mouseenter', function() {
		$(this).find('.link-content').stop().animate({
			marginTop: -50
		}, 200, function() {
			$(this).parent().parent().find('.sub-nav').css({
				left: 0
			}).animate({
				opacity: 1
			});
		});
	})
	.on('mouseleave', function() {
		// For first level items
		if ($(this).parent().find('.sub-nav').length == 0) {
			$(this).find(".link-content").stop().animate({
				marginTop: 0
			}, 200);
		}
	})

$('.navigation').find('.sub-nav')
	.on('mouseleave', function() {

		// Submenus
		$(this).animate({
			opacity: 0
		}, 200, function() {
			$(this).css({
				left: -1000
			})
		});

		$(this).parent().find('.link-content').stop().animate({
			marginTop: 0
		}, 200);
	});

</script>

</body>
</html>