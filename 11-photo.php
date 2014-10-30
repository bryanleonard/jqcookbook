<html>
<head>
	<meta charset="UTF-8">
	<title>Slideshow</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
		.gallery {
			width: 600px;
			padding: 25px;
			margin: 50px auto auto auto;
			position: relative;
			background: #ccc;
		}

		.frame {
			height: 295px;
			margin-bottom: 10px;
			position: relative;
		}

		.frame img {
			display: block;
			width: 100%;
			position: absolute;
			left: 0;
			top: 0;
		}

		.bottom {
			overflow: hidden;
		}

		.thumbs {
			height: 80px;
			white-space: nowrap;
			text-align: center;
		}

		.thumbs a {
			display: inline-block;
			opacity: 0.5;
			-webkit-transition: opacity 0.5s ease-in-out;
			-moz-transition: opacity 0.5s ease-in-out;
			-ms-transition: opacity 0.5s ease-in-out;
			-o-transition: opacity 0.5s ease-in-out;
			transition: opacity 0.5s ease-in-out;
		}
		.gallery .thumbs a:hover {
			opacity: 1.0;
		}
		.arrow {
			position: absolute;
			z-index: 5;
			border: 3px solid;
			padding: 4px 6px;
			border-radius: 50%;
			background: #fff;
			bottom: 3em;
		}
		.arrow.disabled {
			color: #252525;
		}
		.left-arrow {
			left: .5em;
		}
		.right-arrow {
			right: .5em;
		}
		.arrow-right {
			position: absolute;
			right: 16px;
			top: 13px;
		}
		.arrow-left {
			position: absolute;
			right: 21px;
			top: 13px;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header"></h1>
	</hgroup>



<div class="gallery" data-thumb-width="150">
	
	<div class="frame">
		<img src="imgs/01.jpg">
		<img src="imgs/02.jpg">
		<img src="imgs/03.jpg">
		<img src="imgs/04.jpg">
		<img src="imgs/05.jpg">
		<img src="imgs/06.jpg">
		<img src="imgs/07.jpg">
		<img src="imgs/08.jpg">
	</div>

	<div class="bottom">
		<a href="#" class="arrow left-arrow"  data-direction="left"><i class="fa fa-arrow-left fa-2x"></i></a>
		<a href="#" class="arrow right-arrow" data-direction="right"><i class="fa fa-arrow-right fa-2x"></i></a>
		<div class="thumbs"></div>
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

// var SlideShow = function(){

// 	var  _this = this
// 		,gal  = $('.gallery')
// 		,imgs = gal.find('img')
// 		,imgW = gal.data('imgwidth')
// 		,thumbs = gal.find('.thumbs')
// 		,arrow = gal.find('.arrow')
// 		;

// 	this.init = function() {
// 		_this.buildThumbs();
// 		_this.setEvents();
// 	};

// 	this.setEvents = function() {
// 		_this.setArrows();
// 		_this.setMainPic();
// 	};

// 	/**
// 	* Build out the thumbnails for the slider
// 	**/
// 	this.buildThumbs = function() {
// 		for (var key in imgs) {
// 			var _key = parseInt(+key + 1, 10);
// 			if (_key < imgs.length) {
// 				var imgSrc = imgs[_key]['attributes'][0]['value'];
// 				thumbs.append("<a href='#' data-index='" + _key + "' class='thumb'><img src='" + imgSrc + "' width='" + imgW + "'></a>");
// 			}
// 		}
// 	};

// 	/**
// 	* Make arrows do things
// 	**/
// 	this.setArrows = function() {

// 		arrow.on('click', function() {
// 			var $el = $(this);

// 			if ( !$el.hasClass('disabled') ) {
// 				$el.addClass('disabled');
// 					var scrollString = "-=";
// 					if ($(this).data("direction") == "left") {
// 					scrollString = "+=";
// 				}
// 				thumbs.animate({
// 					marginLeft: scrollString + imgW + "px"
// 				}, "fast", function(){
// 					$el.removeClass('disabled');
// 					_this.updateScrollButtons();
// 				});
// 			};
// 		});

// 	}

// 	/**
// 	* Make scroll buttons do stuff
// 	**/
// 	this.updateScrollButtons = function() {
// 		console.log('scroll button');
// 	}

// 	this.setMainPic = function() {




// 		gal.on("click", ".thumb", function(){
// 			var thumb = $(this);
// 			var image = $('.img' + thumb.data('index'));

// 			console.log('hi', thumb, image);
			
// 			$.each(image, function(index, value){


// console.log(value);

// 				if (!$(value).hasClass('img' + thumb.data('index'))) {
// 					$(value).hide();
// 				}
// 			});

// 			if (image.css("display") != "block") {
// 				image.fadeIn();
// 			}
// 		});
// 	}

// 	this.init();
// 	// this.setEvents();
// 	// this.buildThumbs();
// };

// new SlideShow();
// 
// 




/** DECLARE SOME DEFAULT VARIABLES WHICH WILL BE USED
THROUGHOUT **/
var images;
var imageWidth;
$(function(){
imageWidth = $('.gallery').data("thumb-width");
/** COLLECT ALL THE IMAGES FROM WITHIN THE .gallery DIV
**/
images = $('.gallery').find('img');
/** FOR EACH OF THESE IMAGES, CREATE A THUMBNAIL AND ADD
A CLASS TO IDENTIFY THE IMAGE AND THUMBNAIL
RELATIONSHIP **/

$.each(images, function(index, value){
$(value).addClass("img" + index);
$('.gallery .thumbs').append("<a href='#' data-index='" + index + "' class='thumb'><img src='" +
$(this).prop("src") + "' width='" + imageWidth + "' height='120' border='0' /></a>");
});

/** UPDATE THE SCROLL BUTTONS **/
updateScrollButtons();

/** EVENT HANDLERS FOR SCROLL BUTTONS **/
$('.arrow').click(function(){
var element = $(this);
if (!element.hasClass('disabled')) {
element.addClass('disabled');
var scrollString = "-=";
if ($(this).data("direction") == "left") {
scrollString = "+=";
}
$('.thumbs').animate({
marginLeft: scrollString + imageWidth + "px"
}, "fast", function(){
element.removeClass('disabled');
updateScrollButtons();
});
}
});

/** EVENT HANDLERS FOR IMAGES **/
$('.gallery').on("click", ".thumb", function(){
var thumb = $(this);
var image = $('.img' + thumb.data('index'));
$.each(images, function(index, value){
if (!$(value).hasClass('img' + thumb.data('index')))
{
$(value).hide();
}
});
if (image.css("display") != "block") {
image.fadeIn();
}
});
});
function updateScrollButtons() {
var thumbs = $('.thumbs');
var thumbsMarginLeft = parseInt(thumbs.css
("margin-left"));
var thumbsMaxWidth = (images.length * imageWidth);
if (thumbsMarginLeft >= 0) {
$('.left-arrow').addClass('disabled');
} else {
$('.left-arrow').removeClass('disabled');
}
if ((thumbsMarginLeft * -1) >=
(thumbsMaxWidth - thumbs.width() / 2)) {
$('.right-arrow').addClass('disabled');
} else {
$('.right-arrow').removeClass('disabled');
}
}


/*============================================
=            Build out thumbnails            =
============================================*/


/*-----  End of Build out thumbnails  ------*/


// $.each(imgs, function(index, value){

// console.log('i,v',index, value);

// 	$(value).addClass("img" + index);
// 	$('.gallery .thumbs').append("<a href='#' data-index='" + index + "' class='thumb'><img src='" + $(this).prop("src") + "' width='" + imgW + "'></a>");
// });




</script>

</body>
</html>