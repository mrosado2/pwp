<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv=" X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- ADD YOUR CUSTOM CSS HERE -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>
		<script src="js/script.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!--FONT AWESOME-->
		<script src="https://use.fontawesome.com/ccafd2629e.js"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

		<title>BlackCat Web Development</title>
	</head>

	<!--begin header and navbar-->
	<body>
		<header>
			<nav class="navbar navbar-default">
		</header>

		<!-- Welcome -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center"></div>
				</div>
			</div>
		</section>
				<div class="container">

					<div class="row">
						<div class="col-xs-12 text-center">
							... title tag
							... para
					</div>
					<!--Toggle and brand for better mobile display-->
					<div class=navbar-header">
						<button type="button" class="navbar-toggle collapsed" data toggle="collapse"
								  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand page-scroll">| BlackCat Web Developer |</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left">
							<li><a class="page-scroll" href="#home">Home</a></li>
							<li><a class="page-scroll" href="#about">About Me</a></li>
							<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
							<li><a class="page-scroll" href="#contact">Contact Me</a></li>
						</ul>
					</div>
			</nav>

		<!--Main Page Content  -->
		<main>
			<!--<div id="page-top" class="row">
			<div class="col-xs-12">-->
			<div id="home" class="jumbotron text center">
				<h2>Maria Rosado</h2>
				<p>BlackCat WebDevelopment</p>
				<br>
				<i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
			</div>
			<!--</div>
			</div>-->
			<!-- About Me -->
			<i id="about" class="container about section">
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
						<img class="profile" src="img/estrella.png" alt="estrella">
					</div>
				</div>
				</div>
		</main>
		<!-- Portfolio -->
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox"> Check me out
				</label>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</body>
</html>


