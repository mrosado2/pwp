<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<?php require_once("..public_html/lib/head_utils.php");?>

		<title>My Personal Website</title>
	</head>
	<!-- Body Container-->
	<body class="footer">

		<!begin sticky footer content -->
		<div class="sfooter-content">

			<!------------- Header ------------->

		<header>
			<!------- Begin Navbar ------->
			<nav class="nav-scroll navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span> class="icon-bar"></span>
						</button>
						<a class="navbar-brand page-scroll">| Black Cat Develoment |</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li><a class="page-scroll" href="#home">Home</a></li>
								<li><a class="page-scroll" href="#about">About Me</a></li>
								<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
								<li><a class="page-scroll" href="#contact">Contact Me</a> </li>
							</ul>
					</div>
				</div>
			</nav>
		</header>
			<!------------- Begin Main Content ------------->
			<main>
				<!--<div id="page-top" class="row">
					<div class="col-xs-12">-->
				<div id="home" class="jumbotron text-center">
					<h1>Maria Rosado</h1>
					<p>Web Developer</p>
					<br>
					<i class=""fa fa-angle-down fa 5x" aria-hidden="true"></i>
				</div>
			<!--</div>
		</div>-->

		<!------------- About Me ------------->
		<div id="about" class="container about section"
			  <h2 class="heading">About Me</h2>
				<div class="row">
					<div class="col-md-6">
						<p>Hi, My name is Maria Rosado. I'm a web developer and my passion is to help my customers to find
						opportunities to increase their productivity and business opportunities.
						I formerly worked as a technician on manufacturing industry and that gave me experience of team work,
						customer service, import and export.
	</div>-->
			<!-- About Me -->
			<id="about" class="container about section">
			<div><h2>About Me</h2></div>
			<div class="row">
				<div class="col-md-6">
					<p>Hello, I'm Maria and I am a Web Developer. I pretty much enjoy solving problems. I have done so in all
						my jobs.</p>
					<p>I have experience in sales, manufacturing, training and events organization.</p>
					<p>I have helped my employers save money and time by implementing technology and creative solutions.</p>
					<p>If you would like to find our where you may find opportunities to increase your productivity and
						cut costs, contact me.</p>
				</div>
				<div class="col-md-6">
					<img class="maria-profile" src="img/maria-profile.png" alt="maria-profile">
				</div>
		</div>
	</div>

		</main>
		<!-- Portfolio -->
		</form>
		</div>
		<div class="col-xs-12 col-md-6 portfolio-caption">
			<h4>Growify</h4>
			<p class="text-muted">Description</p>
		</div>
		<div id="portfolio" class="section">
			<div class="container">
				<h2 class="heading">Portfolio</h2>
				<div class="row"> <!--row flex is not working here; so I didn't include it-->
					<div class="col-md-3">
						<img class="img-responsive portfolio-img" src="images/LogoMakr.png" alt="flek logo">
						<div class="caption">
							<h3>
								Flek
							</h3>
							<p>
								Connecting artists with patrons of local culture and art.
							</p>
						</div>
						<div class="caption-padding">
							<a href="//flek.me" target="_blank"
								class="btn btn-primary" role="button"><i
									class="fa fa-lg fa-external-link"></i></a>
							<a href="//github.com/gsandoval49/flek" target="_blank"
								class="btn btn-default pull-right"
								role="button"><i class="fa fa-lg fa-github"></i></a>
						</div>
					</div>
					<div class="col-md-3">
						<img class="portfolio-img coming-soon" src="images/coming-soon.jpg" alt="coming-soon">
						<div class="caption">
							<h3>
								Project
							</h3>
							<p>
								Please check back soon. A fantastic webiste will be launching!
							</p>
						</div>
						<div class="caption-padding">
							<a href="//google.com/" target="_blank"
								class="btn btn-primary" role="button"><i
									class="fa fa-lg fa-external-link"></i></a>
							<a href="//github.com/mrosado2" target="_blank"
								class="btn btn-default pull-right"
								role="button"><i class="fa fa-lg fa-github"></i></a>
						</div>
					</div>
					<div class="col-md-3">
						<img class="portfolio-img coming-soon" src="images/coming-soon.png" alt="coming-soon">
						<div class="caption">
							<h3>
								Project
							</h3>
							<p>
								Please check back soon. A fantastic webiste will be launching!
							</p>
						</div>
						<div class="caption-padding">
							<a href="//google.com/" target="_blank"
								class="btn btn-primary" role="button"><i
									class="fa fa-lg fa-external-link"></i></a>
							<a href="//github.com/2" target="_blank"
								class="btn btn-default pull-right"
								role="button"><i class="fa fa-lg fa-github"></i></a>
						</div>
					</div>
					<div class="col-md-3">
						<img class="portfolio-img coming-soon" src="images/coming-soon.png" alt="coming soon">
						<div class="caption">
							<h3>
								Project
							</h3>
							<p>
								Please check back soon. A fantastic webiste will be launching!
							</p>
						</div>
						<div class="caption-padding">
							<a href="//google.com/" target="_blank"
								class="btn btn-primary" role="button"><i
									class="fa fa-lg fa-external-link"></i></a>
							<a href="//github.com/csosa2" target="_blank"
								class="btn btn-default pull-right"
								role="button"><i class="fa fa-lg fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!------------------------- CONTACT FORM------------------------------------->
		<div id="contact" class="container section">
			<h2 class="heading">Contact Me</h2>
			<div class="row">
				<div class="col-md-3"></div>
				<!--Begin Contact Form-->
				<div class="col-md-6">
					<form id="contact-form" action="php/mailer.php" method="POST" novalidate>
						<div class="form-group">
							<label for="name">Name <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message"
											 placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6Led9SkTAAAAAKHa_JtzYJbmfs_lUQhrE0LufdKm"></div>

						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>
				</div>
				<div class="col-md-3"></div>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</div>
		</main>
		</div>
		<!--------------------------------------- BEGIN FOOTER ------------------------------------>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!--TWITTER ICON-->
						<a href="//twitter.com/BlackcatDevelop" target="_blank" class="btn btn-social-icon btn-twitter">
							<span class="fa fa-twitter fa-2x"></span>
						</a>
						<!--GITHUB ICON-->
						<a href="//github.com/mrosado2" target="_blank" class="btn btn-social-icon btn-github">
							<span class="fa fa-github fa-2x"></span>
						</a>
						<!--LINKEDIN ICON-->
						<a href="//www.linkedin.com/in/maria-rosado-bb1608132" target="_blank"
							class="btn btn-social-icon btn-linkedin">
							<span class="fa fa-linkedin fa-2x"></span>
						</a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

