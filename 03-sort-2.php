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
		title: "A",
		firstname: "John",
		lastname: "Doe"
	},
	{
		title: "Mrs",
		firstname: "Stephaniel",
		lastname: "Coldbrain"
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
	},
	{
		title: "Miss",
		firstname: "Laura",
		lastname: "Doe"
	},
	{
		title: "Mr",
		firstname: "Dexter",
		lastname: "Alabaster"
	},
	{
		title: "Sir",
		firstname: "Cubic",
		lastname: "Zirconium"
	}
];

function sortObjByParam(param) {
	return function(a,b) {
		if (a[param] == b[param]) { return 0; };
		if (a[param] > b[param] ) { return 1; }
		else { return -1 };
	};
};

var byTitle = people.sort(sortObjByParam("title"));
console.log( 'Title: ', byTitle[0]["title"], byTitle[0]["lastname"] );

var byLName = people.sort(sortObjByParam("lastname"));
console.log( 'LName: ', byLName[0]["title"], byLName[0]["lastname"] );

</script>

</body>
</html>