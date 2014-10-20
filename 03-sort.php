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
				
				

			</div>
		</div>

	</div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
<!-- <script src="scripts.js"></script> -->

<script>
	
var people = [
	{
		title: "Mr",
		firstname: "John",
		lastname: "Doe"
	},
	{
		title: "Mrs",
		firstname: "Jane",
		lastname: "Doe"
	},
	{
		title: "Sir",
		firstname: "Johnathan",
		lastname: "Williams"
	},
	{
		title: "Sir",
		firstname: "Edward",
		lastname: "Tailor"
	}
];

function findObjs(param, val, obj){
	var matches = [];

	for (var i in obj) {
	    if (typeof obj[i] === 'object') {
	    	matches = matches.concat( findObjs(param, val, obj[i]) );
	    } else if (i === param && obj[param] === val) {
	    	matches.push(obj);
	    }
	};
	return matches;
};

console.log( 'peoples: ', findObjs('title', 'Sir', people) );

</script>

</body>
</html>