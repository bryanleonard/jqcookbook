<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
		.tab-nav {
			margin: 0;
			padding: 0 0 0 2em;
			list-style: none;
			background-color: #E1E1E1;
			border-top-right-radius: 5px;
			border-top-left-radius: 5px;
		}

		.tab-nav li {
			display: inline-block;
		}

		.tab-nav a {
			display: block;
			margin-right: 2em;
			padding: .25em .5em;
		}

		.tab-nav .active {
			background: #f2f2f2;
			border-bottom: 1px solid #666;
		}

		.tabs .section:not(:first-child) {
			display: none;
		}

		.tab-content {
			padding: 2em 1em 1em
		}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12 tabs">
	
	<hgroup>
		<h1 class="page-header">Some tabs and stuff.</h1>
	</hgroup>

<ul class="tab-nav">
	<li><a href="#section1" class="active">Section 1</a></li>
	<li><a href="#section2">Section 2</a></li>
	<li><a href="#section3">Section 3</a></li>
</ul>

<div class="tab-content">
	<div class="section" id="section1">
		<h4>Section 1</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste possimus incidunt dicta quos aperiam sapiente. Aspernatur autem quo itaque doloribus quasi mollitia, tempora at omnis, similique debitis quas nulla dolores.</p>

		<p>Rerum mollitia inventore vero corporis laudantium id perspiciatis, similique, cupiditate aliquid minus consectetur fuga! Pariatur numquam cumque quidem at aspernatur, odit quibusdam.</p>
	</div>
	<div class="section" id="section2">
		<h4>Section 2</h4>
		<p>Rerum mollitia inventore vero corporis laudantium id perspiciatis, similique, cupiditate aliquid minus consectetur fuga! Pariatur numquam cumque quidem at aspernatur, odit quibusdam.</p>

		<p>Rerum mollitia inventore vero corporis laudantium id perspiciatis, similique, cupiditate aliquid minus consectetur fuga! Pariatur numquam cumque quidem at aspernatur, odit quibusdam.</p>

		<p>Rerum mollitia inventore vero corporis laudantium id perspiciatis, similique, cupiditate aliquid minus consectetur fuga! Pariatur numquam cumque quidem at aspernatur, odit quibusdam.</p>
	</div>
	<div class="section" id="section3">
		<h4>Section 3</h4>
		<p>Rerum mollitia inventore vero corporis laudantium id perspiciatis, similique, cupiditate aliquid minus consectetur fuga! Pariatur numquam cumque quidem at aspernatur, odit quibusdam.</p>

		<p>Rerum mollitia inventore vero corporis laudantium id perspiciatis, similique, cupiditate aliquid minus consectetur fuga! Pariatur numquam cumque quidem at aspernatur, odit quibusdam.</p>
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

// pg 232
$('.tab-nav').find('a').on('click', function() {
	console.log(this, this.hash);

	$('.tab-nav').find('a').removeClass('active');
	$(this).addClass('active');

	$('.tab-content').find('.section').hide();
	$(this.hash).fadeIn();
})


</script>

</body>
</html>