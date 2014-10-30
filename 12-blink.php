<html>
<head>
	<meta charset="UTF-8">
	<title>Blinking button</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>


	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Blinking button</h1>
	</hgroup>

<div class="frame">
	<h1>Newsletter!</h1>
	<p>Enter your email address below to sign-up for our monthly newsletter.</p>
	
	<form>
		<input type="text" class="email-input" name="email"
		placeholder="Your Email" />
		<button class="blinker">Sign-up Now!</button>
	</form>
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


$('.email-input').on('focus', function() {
	// $('.blinker').fadeTo(300, 0.1).fadeTo(300,  1);
	blinking($('.blinker'));
})

function blinking(elm) {
    timer = setInterval(blink, 10);
    function blink() {
        elm.fadeOut(400, function() {
           elm.fadeIn(400);
        });
    }
}

</script>

</body>
</html>