<html>
<head>
	<meta charset="UTF-8">
	<title>Content slider</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>

.slider-frame {
	width: 600px;
	height: 250px;
	margin: 50px auto auto auto;
	overflow: hidden;
	position: relative;
}
.slider-content {
	margin: 0;
	padding: 0;
	list-style: none;
	position: relative;
}
.slider-content li {
	float: left;
	width: 600px;
	height: 250px;
	background-color: #E1E1E1;		
}
.slider-content li h1,
.slider-content li p {
	margin: 10px;
}
.slider-nav {
	list-style: none;
	padding: 0;
	margin: 0;
	height: 35px;
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	text-align: center;
}
.slider-nav li {
	display: inline-block;
	margin-right: 5px;
}
.slider-nav li a {
	display: block;
	color: #FFF;
	text-decoration: none;
	border-radius: 50%;
	background-color: #333;
	width: 25px;
	height: 25px;
	text-align: center;
	line-height: 25px;

	-webkit-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
.slider-nav li a:hover {
	background-color: #000;
}
.slider-nav li a.active {
	background-color: #FFF;
	color: #333;
	height: 45px;
	width: 45px;
	font-weight: 700;
/*	position: relative;
	top: -8px;*/
	padding-top: 11px;
	font-size: 125%;
/*	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;*/
}

.section0 {
	background: url(imgs/zoom0.jpg) no-repeat;
	background-size: cover;
}

.section1 {
	background: url(imgs/zoom1.jpg) no-repeat;
	background-size: cover;
}	

.section2 {
	background: url(imgs/zoom2.jpg) no-repeat;
	background-size: cover;
}

.section3 {
	background: url(imgs/zoom3.jpg) no-repeat;
	background-size: cover;
}		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Content slider</h1>
	</hgroup>

<div class="slider-frame">
	<ul class="slider-content">
		<li class="section0">
			<h1>Section 1</h1>
			<p>Some content for section one.</p>
		</li>
		<li class="section1">
			<h1>Section 2</h1>
			<p>Some content for section two.</p>
		</li>
		<li class="section2">
			<h1>Section 3</h1>
			<p>Some content for section three.</p>
		</li>
		<li class="section3">
			<h1>Section 4</h1>
			<p>Some content for section four.</p>
		</li>
	</ul>
<ul class="slider-nav"></ul>
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

var _sliderContent = $('.slider-content li');

for (var i = 0; i < _sliderContent.length; i++) {
	$('.slider-nav').append("<li><a href='#" + i + "' " + ((i == 0) ? "class='active'" : "") + ">" + (i + 1) + "</a></li>");
}

$('.slider-content').width( (600 * _sliderContent.length) + "px" );

console.log( $('.slider-content') );

$('.slider-nav').find('a').on("click", function(){
	var index = this.hash.replace("#", "");

	$(".slider-nav a").removeClass("active");

	$(this).addClass("active");

	$('.slider-content').animate({
		left: -(index * 600) + "px"
	});
});



// comment out to stop auto-slide, you'd also need to add a stop feature on mouseover...
	var count = 0;
	var slideIt = setInterval(function() {
		if (count >=  _sliderContent.length) {
			count = 0;
		};

		$('.slider-content').animate({
			left: -(count * 600) + 'px'
		});

		$('.slider-nav a').removeClass('active');
		$('.slider-nav li').find("a[href='#" + count +"']").addClass('active');
		count++;
	}, 3000);



</script>

</body>
</html>