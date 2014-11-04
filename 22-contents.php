<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
body {
	background-color: #5dace7;
}
		
.header {
    height: 150px;
    background-color: #0174cd;
}
.header h1 {
    width: 1000px;
    margin: auto;
    padding: 0;
    line-height: 100px;
    font-size: 40px;
    color: #FFFFFF;
}

.content-frame {
    margin: -50px auto auto auto;
    width: 1000px;
    background-color: #FFFFFF;
    min-height: 1300px;
    position: relative;
}
.content-frame .left {
    margin-right: 240px;
    padding: 20px;
}
.content-frame .left h1 {
    margin: 0;
}
.content-frame .right {
    width: 200px;
    padding: 10px;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    background-color: #F1F1F1;
}
.content-frame .right h2 {
    margin: 0;
    padding: 0;
}
	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">

<div class="header">
    <h1>DYNAMIC TABLE OF CONTENTS</h1>
</div>
<div class="content-frame">
    <div class="left">
        <h1 id="one">MAIN HEADING</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h2 id="two">SUBTITLE</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <h3 id="three">SUB-SUBTITLE</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h2 id="four">SUBTITLE</h2>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h3 id="five">SUB-SUBTITLE</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h4 id="six">SUB-SUB-SUBTITLE</h4>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="right">
        <h2>CONTENTS</h2>
        <ol class="contents"></ol>
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

//pg 213
var $contents = $('.content-frame').find('.left');
var $headers = $contents.find('h1, h2, h3, h4');

for (var key in $headers) {
		var obj = $headers[key];
}

$headers.each(function(index, value){ 
	var _header = $(value);
	var level = parseInt(_header.context.localName. replace("h", "")); 

	if (typeof _header.attr("id") != "undefined") { 
		var listItem = $("<li><a href='#" + _header.attr("id") + "'>" + _header.html() + "</a></li>");
	} else { 
		var listItem = $("<li>" + _header.html() + "</li>");
	} 
	listItem.css("padding-left", (level * 5));
	$('.contents').append( $(listItem))
});


</script>

</body>
</html>