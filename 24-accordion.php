<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
.container {
	width: 800px;
	margin: 20px auto auto auto;
}
.accordion section a.header {
	display: block;
	line-height: 30px;
	background-color: #666;
	border-bottom: 1px solid #000;
	padding: 0 10px 0 22px;
	position: relative;
	text-decoration: none;
	color: #FFFFFF;
}
.accordion section .content {
	padding: 10px;
	margin: 0 6px 0 6px;
	background-color: #F1F1F1;
	color: #333333;
}
.accordion section .content p {
	margin-top: 0;
}
.arrow {
	position: absolute;
	width: 20px;
	height: 20px;
	left: 10px;
	top: 9px;
}
.right-arrow {
	width: 0;
	height: 0;
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent;
	border-left: 6px solid white;
}
.down-arrow {
	width: 0;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 6px solid white;
	top: 11px;
	left: 6px;
}
	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Accordion</h1>
	</hgroup>



<div class="accordion">

	<section>
		<a href="#" class="header">
		<div class='arrow right-arrow down-arrow'></div> Section 1</a>
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur
			adipisicing elit, sed do eiusmod tempor incididunt ut labore
			et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
			exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
			sint occaecat cupidatat non proident, sunt in culpa qui officia
			deserunt mollit anim id est laborum.</p>
		</div>
	</section>


	<section>
		<a href="#" class="header">
		<div class='arrow right-arrow'></div> Section 2</a>
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur
			adipisicing elit, sed do eiusmod tempor incididunt ut labore
			et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
			exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
			sint occaecat cupidatat non proident, sunt in culpa qui officia
			deserunt mollit anim id est laborum.</p>
		</div>
	</section>

	<section>
		<a href="#" class="header">
		<div class='arrow right-arrow'></div> Section 3</a>
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur
			adipisicing elit, sed do eiusmod tempor incididunt ut labore
			et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
			exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate
			velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
			sint occaecat cupidatat non proident, sunt in culpa qui officia
			deserunt mollit anim id est laborum.</p>
		</div>
	</section>

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

$('.accordion section:not(:first-child)').find('.content').hide();

$('.container').on('click', '.accordion a', function() {
	var _contents = $('.accordion').find('.content');
	var _curr = $(this).parent().find('.content');

	for (var i=0; i < _contents.length; i++) {
	    	var content = $(_contents[i]);


	    	if (content[0] !== _curr[0]) {
	    		content.slideUp();
	    		content.parent().find('.right-arrow').removeClass('down-arrow');
	    	}

	    	_curr.slideDown();
	    	_curr.parent().find('.right-arrow').addClass('down-arrow');
	};
})


</script>

</body>
</html>