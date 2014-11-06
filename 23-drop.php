<html>
<head>
	<meta charset="UTF-8">
	<title>Drag, Drop, and all that nonsense.</title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
		.container {
			width: 800px;
			height: 800px;
			margin: 20px auto auto auto;
			border: 1px solid red !important;
		}
		.draggable {
			width: 120px;
			height: 120px;
			margin: 10px;
			background-color: darkred;
			cursor: pointer;
		}
		.draggable.dragging {
			box-shadow: 5px 5px 5px #CCC;
		}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Drag, Drop, and all that nonsense.</h1>
	</hgroup>

	<div class="draggable"></div>
	<div class="draggable"></div>
	<div class="draggable"></div>

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


// $('.draggable')
// 	.on('mousedown', function() {
// 		$(this).addClass('dragging');
// 	})
// 	.on('mousemove', function() {
		// if ($(this).hasClass('dragging')) {
		// 	// Get parent pos
		// 	var parentPosition = $(this).parent().offset();
			
		// 	//Prevent overflowing
		// 	var left = (event.pageX - ($(this).width()/2));
		// 	var parentRight = parentPosition.left + $(this).parent().width();

		// 	if (left > (parentRight - $(this).width())) {
		// 		left = (parentRight - $(this).width())
		// 	} else if (left <= parentPosition.left) {
		// 		left = parentPosition.left;
		// 	}
			
		// 	var top = (event.pageY - $(this).height()/2); 
		// 	var parentBottom = parentPosition.top + $(this).parent().height();

		// 	if (top > parentBottom - $(this).height()) {
		// 		top = (parentBottom - $(this).height()) 
		// 	} else if (top <= parentPosition.top) {
		// 		top = parentPosition.top;
		// 	}

		// 				//Set new position
		// 	$(this).css({
		// 		top: top + "px",
		// 		left: left + "px",
		// 		position: "absolute"
		// 	});


		// }
	// })
		// 
		

		$(function(){
$('.draggable').on("mousedown", function(){
$(this).addClass('dragging');
}).on("mousemove mouseout", function(event){
if ($(this).hasClass("dragging")) {
//Get the parents position
var parentPosition = $(this).parent().offset();
//Don't allow the draggable element to go over the parent's left and right
var left = (event.pageX - ($(this).width() / 2));
var parentRight = parentPosition.left + $(this).
parent().width();
if (left > (parentRight - $(this).width())){
left = (parentRight - $(this).width());
} else if(left <= parentPosition.left) {
left = parentPosition.left;
}
//Don't allow the draggable element to go over the parent's top and bottom
var top = (event.pageY - ($(this).height() / 2));
var parentBottom = parentPosition.top + $(this).
parent().height();
if (top > (parentBottom - $(this).height())) {
top = (parentBottom - $(this).height());
} else if (top <= parentPosition.top) {
top = parentPosition.top;
}
//Set new position
$(this).css({
top: top + "px",
left: left + "px",
position: "absolute"
});
}
}).on("mouseup", function(){
$(this).removeClass('dragging');
});
});

		//pg 218, this one doesn't work so good.

</script>

</body>
</html>