
<html>
<head>
<meta charset="UTF-8">
<title>Search</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->
<style>

	.loading {
		line-height: 2em;
		display: none; /* DONT DISPLAY BY DEFAULT */
	}
	.loading-holder {
		height: 2em;
	}

</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-xs-12">


<div class='search'>
	<div class='header'>
		<h1>Search Feature</h1>
		<input type='text' id='text' />
		<button id='search'>Search</button>
	</div>
	<div id='results-holder'>
		<div class="loading-holder">
			<div class="loading">Loading...</div>
		</div>
		<ul id='results-list'>
			<li>stuff</li>
		</ul>
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
	
$(function(){
	//Hide the result list on load
	$('#results-list').hide();

	//Click event when search button is pressed
	$('#search').on('click', function(){
		doSearch();
	});

	//Keypress event to see if enter was pressed in text input
	$('#text').keydown(function(e){
		if(e.keyCode == 13){
			doSearch();
		}
	});
});



function doSearch() {

	var searchText = $('#text').val();
	var $loading = $('.loading');
	var $resultsLI = $('#results-list');
	
	$resultsLI.hide().empty(); //Rehide the search results

	$.ajax({
		url: 'scripts/search.inc.php'
		,type: 'POST'
		,data: {
			'text': searchText
		}
		,beforeSend : function() {
			$loading.show();
		}
	})
	.done(function(data) {

		if (data.results.length > 0) {
			for (var key in data.results) {

				var obj = data.results[key];
				
				for (var prop in obj) {

					if (obj.hasOwnProperty(prop) ){
						$resultsLI.append( '<li>' + obj['title'] + "</li>");
					}
				}
			};

		} else {
			$resultsLI.empty().append('<li>No results found. Sorry, Charlie.</li>').fadeIn();
		}

		$resultsLI.fadeIn();
	})

	.fail(function() {
		$resultsLI.empty().append('<li>Whoops, Page error, sorry about that.</li>').fadeIn();
		// throw 'page errror, sorry about that.';
	})


$loading.fadeOut();
$resultsLI.fadeIn();


	// $.ajax({
	// 	url: 'scripts/search.inc.php',
	// 	type: 'POST',
	// 	data: {
	// 	'text': searchText
	// },
	// beforeSend: function(){
	// 	$('.loading').fadeIn();
	// },
	// done: function(data) {
	// 	$('.loading').fadeOut();
	// 	//Was everything successful, no errors in the PHP script
		



	// 	if (data.success) {
	// 		$('#results-list').empty();
	
	// 		if(data.results.length > 0) {
	// 			$.each(data.results, function(){
	// 				$('#results-list').append("<li>" + this.title + "</li>");
	// 			});
	// 		} else {
	// 			$('#results-list').append("<li class='no-results'>Your search did not return any results</li>");
	// 		}
	
	// 		//Show the results list
	// 		$('#results-list').fadeIn();
	// 	} else {
	// 		//Display the error message
	// 		alert(data.error);
	// 	}
	// }
	// });
}

</script>

</body>
</html>