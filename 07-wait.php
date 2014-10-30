<html>
<head>
	<meta charset="UTF-8">
	<title>Waiting for AJAX</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-8">
	
	<hgroup>
		<h1 class="page-header">Waiting for an AJAX response</h1>
	</hgroup>

	<button class="btn btn-primary" id="load">Load</button>
	<ul id="info"></ul>


			</div>
		</div>

	</div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
<!-- <script src="scripts.js"></script> -->

<script>


/*===============================
=            Load up            =
===============================*/
// $('#load').on('click', function() {
// 	$.when(call1(), call2()).done( cb() );
// })

var $info = $('#info');


/*-----  End of Load up  ------*/




/*=================================
=            Functions            =
=================================*/

// var getAjax = function(url) {
// 	return $.ajax({
// 		url: url
// 		,type: 'GET'
// 		,beforeSend : function() {
// 			//$info.append("Loading...");
// 		}
// 	})
// 	.done(function(data) {
// 		cb();
// 	});
// }

// var cb = function(c1, c2) {
// 	$info.append("Both AJAX requests are complete.");
// }

// var call1 = function() {
// 	getAjax('scripts/loading1.php')
// };

// var call2 = function() {
// 	getAjax('scripts/loading2.php')
// };
// 
// $(function(){
$('#load').click(function(){
	$.when(call1(), call2()).done(function(c1, c2){
		$('#info').append("<li>Both AJAX requests complete!</li>");
	});
});
// });

function call1() {
	return $.ajax({
	url: 'scripts/loading1.php',
	type: 'GET'
	}).success(function(data){
		$('#info').append("<li>" + data + "</li>");
	});
}

function call2() {
	return $.ajax({
	url: 'scripts/loading2.php',
	type: 'GET'
	}).success(function(data){
		$('#info').append("<li>" + data + "</li>");
	});
}

/*-----  End of Functions  ------*/





</script>

</body>
</html>