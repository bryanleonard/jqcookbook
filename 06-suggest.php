<html>
<head>
	<meta charset="UTF-8">
	<title>Auto suggest</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		.suggest-input {
			position: relative;
			padding: 25px;
		}

		/* SUGGESTION LIST STYLES */
		.suggest-list {
			position: absolute;
			width: 424px;
			background-color: #f1f1f1;
			margin: 0;
			left: 25px;
			top: 51px;
			z-index: 100;
			display: none;
			list-style: none;
			padding: 10px;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-8">
<div class="search">
	<hgroup>
		<h1 class="page-header">Auto suggest</h1>
	</hgroup>
				
	<div class="suggest-input">
		<input type='text' id='text'>
		<ul class="suggest-list"><li><a href="#" class="suggestion">thing</a></li></ul>
	</div>
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

var $text = $('#text')
	,$list = $('.suggest-list')
	,$search = $('.search');

/*==========  Click events  ==========*/

$text.on('keyup', function() {
	if ($text.val().length > 2) {
		$list.show();
		makeSuggestion();
	}
});

$search.on('click', '.suggestion', function() {
	$text.val( $(this).html() );
});


/*==========  Functions  ==========*/

var makeSuggestion = function() {
	var searchText = $text.val();

	$text.empty();

	$.ajax({
		url: 'scripts/search.inc.php'
		,type: 'POST'
		,data: {
			'text': searchText
		}
		,beforeSend: function() {
			$list.empty();
			$list.append("<li class='loading'>Loading...</li>");
		}
	})
	.done(function(data) {

		setTimeout(function () {

			$list.empty();

			if (data.results.length > 0) {

				for (var key in data.results) {
					$list.append("<li><a href='#' class='suggestion'>" + data.results[key]['title'] +"</a></li>")
				}

				// Start next file (07) from page 114 of PDF. (Waiting for an AJAX response)

			
			} else {
				
				$list.append("<li>No results found.</li>")
			}

		}, 500);
  		
	})
	.fail(function() {
		$list.empty().append("<li>Sorry, something went and broke.</li>")
	})
};


</script>

</body>
</html>