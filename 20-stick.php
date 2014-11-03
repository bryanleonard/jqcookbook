<html>
<head>
	<meta charset="UTF-8">
	<title>Sticky els</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		body {
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
border-radius: 10px;
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
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
}
.content-frame .right .important {
border: solid 1px #CCCCCC;
text-align: center;
width: 200px;
}
.sticky {
position: fixed;
top: 10px;
border: 1px solid red !important;
}	

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
<!-- 	<hgroup class="header">
		<h1 class="page-header">Sticky els</h1>
	</hgroup> -->
<div class="header">
<h1>STICKY ELEMENTS RECIPE</h1>
</div>
	<div class="content-frame">
<div class="left">
<h1>STICKY ELEMENTS</h1>
<p>Sticky elements are great to keep important content
within the users view, such as share buttons, navigation and also
table of contents.</p>
<p>Scroll down this page and when you are about to go past
the important content on the right hand side, it will start to
follow you down the screen.</p>
</div>
<div class="right">
<ul>
<li><a href="#">Navigation Item 1</a></li>
<li><a href="#">Navigation Item 2</a></li>
<li><a href="#">Navigation Item 3</a></li>
<li><a href="#">Navigation Item 4</a></li>
<li><a href="#">Navigation Item 5</a></li>
<li><a href="#">Navigation Item 6</a></li>
</ul>
<div class="important">
<p>Here is some important content.</p>
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
//pg 201

var importantOrigin = {};
importantOrigin = $('.important').offset();

console.log(importantOrigin);

$(window).scroll(function() {
	sticky();
});

var sticky = function() {
	var $important = $('.important');
	var scrollPos = $('body').scrollTop();

	console.log(scrollPos);

	if(importantOrigin.top < scrollPos) {
		$important.addClass('sticky');
	} else {
		$important.removeClass('sticky');
	}
}
//http://stickyjs.com/


</script>

</body>
</html>