<html>
<head>
	<meta charset="UTF-8">
	<title>Smooth scrolling</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
body {
	margin: 0;
	background-color: #5dace7;
}
.header {
	height: 150px;
	background-color: #0174cd;
}
.header h1 {
	width: 1000px;
	margin: auto;
	padding: 0;
	line-height: 100px;
	font-size: 40px;
	color: #FFFFFF;
}
.content-frame {
	margin: -50px auto auto auto;
	width: 1000px;
	background-color: #FFFFFF;
	min-height: 1300px;
	position: relative;
}
.content-frame .left {
	margin-right: 240px;
	padding: 20px;
}
.content-frame .left h1 {
	margin: 0;
}
.content-frame .right {
	width: 200px;
	padding: 10px;
	position: absolute;
	top: 0;
	right: 0;
	background-color: #F1F1F1;
}
.content-frame .right h2 {
	margin: 0;
	padding: 0;
}
.section {
	height: 400px;
	background-color: #CCCCCC;
	margin-bottom: 20px;
}
.top-link {
	width: 50px;
	text-align: right;
	float: right;
	font-size: 12px;
}

	</style>
</head>
<body id="top">

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup class="header">
		<h1 class="page-header">Smooth scrolling</h1>
	</hgroup>

<div class="content-frame">
	<div class="left">
		<h2 id="one">SECTION 1 <a href="#top" class="toplink">[TOP]</a></h2>

		<div class="section"></div>

		<h2 id="two">SECTION 2 <a href="#top" class="toplink">[TOP]</a></h2>

		<div class="section"></div>

		<h2 id="three">SECTION 3 <a href="#top" class="toplink">[TOP]</a></h2>

		<div class="section"></div>

		<h2 id="four">SECTION 4 <a href="#top" class="toplink">[TOP]</a></h2>

		<div class="section"></div>
	</div>
	
	<div class="right">
		<h2>NAVIGATION</h2>
		<ul>
			<li><a href="#one">SECTION ONE</a></li>
			<li><a href="#two">SECTION TWO</a></li>
			<li><a href="#three">SECTION THREE</a></li>
			<li><a href="#four">SECTION FOUR</a></li>
			<li><a href="http://www.google.com" target="_blank">EXTERNAL LINK</a></li>
			<li><a href="#">EMPTY LINK</a></li>
		</ul>
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

$('a[href*=#]:not([href=#])').on('click', function() {
	console.log(this, this.hash);
	if (this.hash.length > 0) {
		$('body').animate({
			scrollTop: $(this.hash).offset().top
		}, 1000);
	}
	return false;
});


</script>

</body>
</html>