<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<meta http-equiv="Expires" content="0"/>
	<title>VevroDigital</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/base.css" />
	<link rel="stylesheet" href="assets/css/aos.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/hover-min.css"> 
	<link rel="stylesheet" type="text/css" href="assets/css/side-menu.css" />
	<link rel="stylesheet" href="assets/css/blobs.css"> 
	<link rel="stylesheet" href="assets/css/styles.css"> 
	<link rel="stylesheet" href="assets/css/responsive.css"> 
	<link rel="shortcut icon" href="assets/images/favicon.ico" />
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="assets/js/snap.svg-min.js"></script>
	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	<script>
	var vid = document.getElementById("bgvid");
	    vid.currentTime=20;
	</script>

	<script>
		$(document).ready(function(){
			var now = new Date();
			var hours = now.getHours();
			//6pm-11pm night
			if (hours > 17 && hours < 24){
			document.getElementById("sec--map").style.backgroundColor = '#0d023d';
			}
			//8am-5pm day
			else if (hours > 7 && hours < 18){
			document.getElementById("sec--map").style.backgroundColor = '#0a93d3';
			}
			//1am-7am day
			else if (hours > 1 && hours < 8){
			document.getElementById("sec--map").style.backgroundColor = '#eca306';
			}
			else {
			document.getElementById("sec--map").style.backgroundColor = '#242424';
			}
		});
	</script>
	<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/b7ef205d/cloudflare-static/rocket.min.js"></script>
	<script type="text/rocketscript">
	        window.onload = function(){

	            var el = document.getElementById('preloader');
	            setTimeout(function () {
	                el.style.opacity = '0';
	                dis_none(el);
	            },10);
	            function dis_none(element) {
	                setTimeout(function () {
	                    element.style.display = 'none';

	                },500);
	            }
	        };
	</script>
</head>
<body>
<div id="preloader"></div>
	<header>
		<div class="header">
			<div class="menu-wrap">
				<nav class="menu hvr-shutter-out-horizontal">
					<div class="icon-list">
						<a href="index.php"><i class="fa fa-fw fa-star-o"></i><span>Home</span></a>
						<a href="about.php"><i class="fa fa-fw fa-bell-o"></i><span>Who we are</span></a>
						<a href="services.php"><i class="fa fa-fw fa-envelope-o"></i><span>What we do</span></a>
						<a href="careers.php"><i class="fa fa-fw fa-comment-o"></i><span>Join us</span></a>
						<a href="contact.php"><i class="fa fa-fw fa-bar-chart-o"></i><span>Get in touch</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
				<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
						<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
					</svg>
				</div>
			</div>
			<div class="navbar-area">
				<div class="row">
					<div class="col-lg-1 col-md-2 col-sm-3 col-3 ">
						<div class="logoarea">
							<a href="index.php"><img class="logo" src="assets/images/vevrologoMin.png" alt="vevro-logo"></a>
						</div>	
					</div>
					<div class="col-lg-8 col-md-6 col-sm-4 hidden-xs-down">&nbsp;</div>
					<div class="col-lg-3 col-md-4 col-sm-5 col-9">
						<div class="blog-menu-div"><a href="#" class="menuBlog hvr-wobble-to-bottom-right">Blog</a></div>
						<div class="ham-icon-div">
							<button class="menu-button" id="open-button">
								<div id="nav-icon1">
								  <span></span>
								  <span></span>
								  <span></span>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
