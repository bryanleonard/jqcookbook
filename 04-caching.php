<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-xs-6">

			<h3 class="page-header">People, who need people</h3>
				
				<ul id="peopleList"></ul>
				<button class="btn btn-primary js-getPeople">Get some peeps, yo.</button>

			</div>
		</div>

	</div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
<!-- <script src="scripts.js"></script> -->

<script>
	
var cache =[];

$('.js-getPeople').on('click', function() {
	if (cache.length === 0) {
		
		$.ajax({
			url: 'scripts/04-caching.php',
			type: 'GET',
			async: false
		})

		.done(function(data) {
			cache = data;
			var str = ""

			for (var key in cache) {
				var obj = cache[key];
				str += "<li>" + obj.firstname + " " + obj.lastname + "</li>";

				// for (var prop in obj) {
				// 	if( obj.hasOwnProperty(prop) ){

				// 	};
				// };
			};

			console.log(str);
			$('#peopleList').empty().html(str);
		})

		.fail(function() {
			$('#peopleList').html("Whoops!");
		});

	} else {
		$('#peopleList').append("<li>That shit's cached, yo.</li>");
	}
	
});

</script>

</body>
</html>