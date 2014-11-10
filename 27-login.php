<html>
<head>
	<meta charset="UTF-8">
	<title>Login type dealie-o</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
.login-frame {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
display: none;
}
.login-box {
width: 400px;
/*height: 165px;*/
padding: 20px;
margin: auto;
top: -165px;
top: 0;
box-shadow: 0 0 10px rgba(0,0,0,.51);
border-radius: 5px;
position: relative;
background: #fff;
}
.form-group {
margin-bottom: 10px;
}
.form-group .form-control {
/*margin-left: 55px;*/
/*width: 275px;*/
height: 30px;
padding: 0 5px 0 5px;
font-size: 16px;
border-radius: 5px;
border: solid 1px #CCCCCC;
color: #999;
}
.form-group .form-label {
/*width: 50px;*/
font-size: 18px;
display: block;
float: left;
line-height: 30px;
padding-left: 5px;
color: #333;
}		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Login type dealie-o</h1>
	</hgroup>

<button class="open-login btn btn-primary">Open Login Box</button>

<div class="login-frame">
	<div class="login-box form-group clearfix">
		<!-- <div class="login-msg">Please login below</div> -->
		<div class="alert alert-info js-alert" role="alert">Please login below</div>
		<div class="form-group">
			<label class="form-label">Username:</label>
			<input type="text" class="form-control" id="username"/>
		</div>
		<div class="form-group">
			<label class="form-label">Password:</label>
			<input type="text" class="form-control" id="password"/>
		</div>
		<div class="login-actions form-group pull-right">
			<button class="btn btn-primary login-btn">Login</button>
			<button class="btn btn-warning close-login">Cancel</button>
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

$('.open-login').click(function(){
	$('.login-frame').fadeIn(250);
	$('.login-box').animate({'top': '50px'}, 500); /* Do this with CSS */
});

$('.close-login').click(function(){
	$('.login-box').animate({'top': '0'}, 500); /* Do this with CSS */
	$('.login-frame').fadeOut(250);
	$('.login-box').find('input').val('');
});

$('.login-btn').on('click', function() {
	
	var username = $('#username').val();
	var password = $('#password').val();

	console.log(username, password);

//user and pass.
	$.ajax({
		url: 'scripts/login.inc.php',
		type: 'POST',
		data: {
			'username' : username,
			'password' : password
		}
	})
	.done(function(data) {
		var msg = $('.js-alert');

		if (data.success) {
			// window.location.href = "/members.php";
			msg
				.text('You logged in like a big boy!')
				.removeClass('alert-info alert-danger')
				.addClass('alert-success');			

		} else {
			msg
				.text(data.error)
				.removeClass('alert-info alert-success')
				.addClass('alert-danger');

			$('.login-box')
				.animate({ left: -25 }, 20)
				.animate({ left: 0 }, 60)
				.animate({ left: 25 }, 20)
				.animate({ left: 0 }, 60);

		};

	})
	.fail(function() {
		console.log('Fail.');
	})



});

















</script>

</body>
</html>