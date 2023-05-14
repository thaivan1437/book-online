<html>  
    <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Chat Application using PHP Ajax Jquery</title>  
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="jquery.roundabout.min.js"></script>
		<script src="jquery.roundabout-shapes.min.js"></script>
		
    </head>  
    <body>  
        <div class="container">
			<div id="roundaboutslider">
	<div id="roundabout-loader">
		<div id="roundabout-inner">
						<ul id="roundabout-holder" class="roundabout-holder">
								<li class="roundabout-moveable-item">
										<div class="roundabout-caption">
						<h2 class="roundabout-title">Awesome slideshow</h2>					</div>
																<img src="http://themes.persitheme.com/royaldesign/wp-content/uploads/2013/04/portfolio21-640x320.jpg" alt="Awesome slideshow" title="">
									</li>			
								<li class="roundabout-moveable-item">
										<div class="roundabout-caption">
						<h2 class="roundabout-title">Easy to work</h2>					</div>
																<img src="http://themes.persitheme.com/royaldesign/wp-content/uploads/2013/04/portfolio2-640x380.jpg" alt="Easy to work" title="">
									</li>			
								<li class="roundabout-moveable-item">
										<div class="roundabout-caption">
						<h2 class="roundabout-title">Over 500 fonts</h2>					</div>
																<img src="http://themes.persitheme.com/royaldesign/wp-content/uploads/2013/04/portfolio3-640x380.jpg" alt="Over 500 fonts" title="">
									</li>			
								<li class="roundabout-moveable-item">
										<div class="roundabout-caption">
						<h2 class="roundabout-title">Unlimited color &#038; background</h2>					</div>
																<img src="http://themes.persitheme.com/royaldesign/wp-content/uploads/2013/04/portfolio1-640x380.jpg" alt="Unlimited color &#038; background" title="">
									</li>			
								<li class="roundabout-moveable-item">
										<div class="roundabout-caption">
						<h2 class="roundabout-title">Responsive &#038; mobile ready</h2>					</div>
																<img src="http://themes.persitheme.com/royaldesign/wp-content/uploads/2013/04/portfolio4-640x380.jpg" alt="Responsive &#038; mobile ready" title="">
									</li>			
							</ul>
			<div id="roundabout-next"></div>
			<div id="roundabout-prev"></div>
		</div>
	</div>
</div>
		</div>
		<script type='text/javascript'>
	jQuery(document).ready(function(){
		var interval;
		jQuery('#roundabout-holder').roundabout({
			minOpacity:1,
			minScale:0.4,
			maxScale:1,
			duration:600,
			easing:'',
			autoplay:true,
			autoplayDuration:3000,
			autoplayPauseOnHover:false,
			reflect:false,
			enableDrag:false,
			responsive:true,
			shape:'lazySusan',
			btnNext:'#roundabout-next',
			btnPrev:'#roundabout-prev'
		})
		/* .hover(
				function() {
					// oh no, it's the cops!
					clearInterval(interval);
				},
				function() {
					// false alarm: PARTY!
					interval = startAutoPlay();
				}
			) */;
		
		/* interval = startAutoPlay();
		
		function startAutoPlay() {
				return setInterval(function() {
					jQuery('#roundabout-holder').roundabout_animateToNextChild();
				}, 3000);
			} */
		
		jQuery('#roundabout-inner').show();
	});
	</script>
	<style>
		/* Roundabout Slider
---------------------------------------- */

#roundaboutslider {
	overflow:hidden;
}
#roundabout-loader {
	height:380px;
	margin:50px auto;
	background:url(loading.gif) 50% 230px no-repeat;
}
#roundabout-inner {
	display:none;
}
.roundabout-holder {
	height:380px;
	left:50%;
	margin:0 0 0 -316px;
	position:absolute;
	width:640px;
}
.roundabout-moveable-item {
	cursor:pointer;
	list-style-type:none;
	overflow:hidden;
	height:380px;
	width:638px;
	margin:0;
	padding:0;
	background:none;
	border-radius:5px 5px 0 0;
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-bottom:1px solid #af3639;
}
.roundabout-caption {
	padding:15px;
	text-align:left;
	position:absolute;
	bottom:0;
	left:0;
	right:0;
	background-position:0 bottom;
	background-repeat:repeat-x;
	background-color:transparent;
	z-index:1;
	font-size:13px;
}
.roundabout-caption .roundabout-title {
	position:relative;
	display:block;
	margin:5px 0 10px;
	font-size:20px;
	text-shadow:0 0 3px #dddddd;
}
.roundabout-caption .roundabout-content {
	position:relative;
	display:block;
	margin-bottom:10px;
}
.roundabout-moveable-item img {
    display:block;
    height:100%;
    width:100%;
	border-radius:5px 5px 0 0;
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
}
.roundabout-in-focus {
    cursor:auto;
	z-index:999 !important;
}
.roundabout-in-focus a {
	display:block;
	height:380px;
	width:638px;
}
#roundabout-prev,
#roundabout-next {
	width:39px;
	height:39px;
	display:block;
	left:50%;
	top:50%;
	margin-top:-19px;
	margin-left:-580px;
	position:absolute;
	background:url(roundabout-direction.png) 0 0 no-repeat;
	z-index:999;
}
#roundabout-next {
	background-position:-39px 0;
	left:auto;
	right:50%;
	margin-right:-580px;
}
#roundabout-prev:hover {
	background-position:0 -39px;
}
#roundabout-next:hover {
	background-position:-39px -39px;
}

/* LiteAccordion Slider
---------------------------------------- */
	</style>
    </body>  
</html>