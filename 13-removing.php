
<html>
<head>
	<meta charset="UTF-8">
	<title>Removing els</title>

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
		<h1 class="page-header">Removing els</h1>
	</hgroup>


<div class="frame">
	<h2>User Management</h2>
	<table width="100%" id="user-table" class="table table-striped">
	<thead>
	<tr>
	<th>Username</th>
	<th>Email</th>
	<th>Full Name</th>
	<th>Date of Birth</th>
	<th></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>jd101</td>
	<td>j.doe@somewhere.com</td>
	<td>John Doe</td>
	<td>16-05-1987</td>
	<td><button class="delete btn btn-warning">Delete</button></td>
	</tr>
	<tr>
	<td>msmith17</td>
	<td>smithy@nowhere.com</td>
	<td>Jane Smith</td>
	<td>18-08-1988</td>
	<td><button class="delete btn btn-warning">Delete</button></td>
	</tr>
	<tr>
	<td>tommy22</td>
	<td>tom@idontknow.com</td>
	<td>Thomas Knowhow</td>
	<td>10-08-1980</td>
	<td><button class="delete btn btn-warning">Delete</button></td>
	</tr>
	</tbody>
	</table>
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


$('#user-table').on('click', '.delete', function() {
	var response = confirm("you sure?");

	if (response) {
		$(this).parent().parent().fadeOut('slow').remove();
	}
});

</script>

</body>
</html>