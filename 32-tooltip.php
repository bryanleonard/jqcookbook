<html>
<head>
	<meta charset="UTF-8">
	<title>tooltip plugin</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
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
		<h1 class="page-header">Tooltip plugin</h1>
	</hgroup>

<p>&nbsp;</p>
<p><input type="text" class="hasTooltip" data-title="This is a tooltip on an input box" /></p>
<p>&nbsp;</p>
<p><a href="http://www.google.com/" target="_blank"
class="hasTooltip" title="External link to http://www.google.com/">Google.com</a></p>
<p>&nbsp;</p>
<button class="hasTooltip" data-title="A button with a tooltip">Button</button>


			</div>
		</div>

	</div>
</div>


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="/assets/lib/jquery-1.11.1.js"></script>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script> -->
<script src="scripts/plugin-tooltip.js"></script>

<script>

$('.hasTooltip').tooly();



</script>

</body>
</html>