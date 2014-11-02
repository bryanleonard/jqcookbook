<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		body {
margin: 0;
background-color: #5dace7;
}
.header {
height: 130px;
background-color: #0174cd;
}
.header h1 {
margin: 0 50px 0 50px;
padding: 0;
line-height: 100px;
font-size: 40px;
color: #FFFFFF;
}
.content-frame {
margin: -30px 50px 0 50px;
background-color: #FFFFFF;
border-radius: 10px;
height: 50px;
height: 250px;
position: relative;
padding: 0 20px 0 20px;
overflow: hidden;
}
.content-frame ul {
list-style: none;
margin: 0;
padding: 0;
}
.content-frame ul li {
line-height: 50px;
line-height: 50px;
}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header"></h1>
	</hgroup>

<div class="header">
<h1>CONTENT TICKER</h1>
</div>
<div class="content-frame">
<ul id="ticker">
<li>Learn from yesterday, live for today, hope for
tomorrow. The important thing is not to stop questioning</li>
<li>Try not to become a man of success, but rather try to
become a man of value</li>
<li>Logic will get you from A to B. Imagination will take
you everywhere</li>
<li>Reality is merely an illusion, albeit a very
persistent one</li>
</ul>
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

var tick = null;
var interval = 2000;
$(function(){
tick = setInterval(function(){
ticker()
}, interval);
$('.content-frame').on("mouseover", function(){
clearInterval(tick);
});
$('.content-frame').on("mouseout", function(){
tick = setInterval(function(){
ticker()
}, interval);
});
});
function ticker() {
$('#ticker li:first-child').slideUp(function(){
$(this).appendTo($('#ticker')).show();
});
}


</script>

</body>
</html>