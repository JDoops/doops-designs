<!doctype html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
	<div class="container">

		<header id="main-header">			
			<div class="header">
				<ul class="nav-top">
					<li class="nav-item">
						<a id="website-link" href="javascript:void(0)" class="website box-link"></a>
						WEBSITES
					</li>
					<li class="nav-item">
						<a id="email-link" href="javascript:void(0)" class="email box-link"></a>
						EMAILS
					</li>
					<li class="nav-item">
						<a id="app-link" href="javascript:void(0)" class="app box-link"></a>
						APPS
					</li>
					<li class="nav-item">
						<a id="home-link" href="javascript:void(0)" class="home box-link"></a>
						<div class="logo">
							<img src="logo/color/vivid-glow-logo.png" class="cell logo-img pulsable"/>
						</div>
					</li>
					<li class="nav-item">
						<a id="game-link" href="javascript:void(0)" class="game box-link"></a>
						GAMES
					</li>
					<li class="nav-item">
						<a id="contact-link" href="javascript:void(0)" class="contact box-link"></a>
						CONTACT
					</li>
					<li class="nav-item">
						<a id="invention-link" href="javascript:void(0)" class="invention box-link"></a>
						INVENTION
					</li>
				</ul>
			</div>
		</header>

		<div class="main">
			<div id="website" class="onesie">
				<?php include ('page/website.php');?>
			</div><!-- END WEBSITE -->
			<div id="email" class="onesie">
				<div class="app-slider">

				</div>
			</div><!-- END EMAIL -->
			<div id="app" class="onesie">
				<div class="app-slider">

				</div>
			</div><!-- END APP -->
			<div id="home" class="onesie show-this-div">
				<div class="heroic-slider">
				
					<div class="heroic-slide">
						<video src="video/logo/Shine_Logo_Animation_1.mp4" class="heroic-video" autoplay></video>
					</div>

				</div>
			</div><!-- END HOME -->
			<div id="game" class="onesie">
				<div class="game-slider">

				</div>
			</div><!-- END GAME -->
			<div id="contact" class="onesie">
				<div class="contact-slider">

				</div>
			</div><!-- END CONTACT -->
			<div id="invention" class="onesie">
				<div class="invention-slider">

				</div>
			</div><!-- END INVENTION -->
		</div>

		<footer id="main-footer">
			<div class="footer">
				<div class="copyright pulsable">
					&copy;Doops Designs 2018
				</div>
			</div>
		</footer>
	</div>
</body>

<?php include ('js/script.php');?>
</html>