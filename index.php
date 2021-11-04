<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/692e51f240.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand mr-5 mb-3" href="#">
					<img src="images/logo.png" alt="Freedom">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav text-uppercase font-weight-bold">
						<li class="nav-item active mx-2">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Portfolios</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Blog</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Shop</a>
						</li>
					</ul>
					<a href="/login/login.php">
					<button type="button" class="btn-user ml-auto mt-3 mt-lg-0 "></button>
					</a>
				</div>

			</nav>
		</div>
	</header>
	<div id="main-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#main-carousel" data-slide-to="1"></li>
			<li data-target="#main-carousel" data-slide-to="2"></li>
			<li data-target="#main-carousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/slide-1.jpg" class="d-block w-100" alt="">			
			</div>
			<div class="carousel-item">
				<img src="images/slide-2.jpg" class="d-block w-100" alt="">
			</div>
			<div class="carousel-item">
				<img src="images/slide-3.jpg" class="d-block w-100" alt="">
			</div>
			<div class="carousel-item">
				<img src="images/slide-3.jpg" class="d-block w-100" alt="">
			</div>
		</div>
		<a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">			
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">		
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="main-info container mb-5">
		<div class="main-text text-center mb-5">
			<h3 class="mt-5 pt-5 mb-5">Hello, i am Bekzat!!!</h3>
			<p class="px-2">I am senior student of College at International Ala-Too university! My name is Bekzat, last name is Melisov. I was born in 12.04.2003. </p>
		</div>

		<h3 class="text-center pt-5 my-5 ">My photoes</h3>
	<div class="person-info row">
			<div class="person-1 col-12 col-md-4">
				<img src="images/person-1.jpg" alt="">
				<h4 class="text-uppercase pt-3 border-f pb-2">Craig Garner Ceo</h4>
				<p>Amazone blessée du type de Sôsiklès. Copie romaine d'après un original grec Elle rassemble le peuple, les faubourgs et la</p>
				<div class="fg row px-2">
					<a class="btn btn-1 btn-primary btn-lg col-6 fab fa-facebook-f" href="https://www.facebook.com/" role="button"></a>
					<a class="btn btn-2 btn-primary btn-lg col-6 fab fa-google-plus-g" href="https://www.google.com/" role="button"></a>
				</div>
			</div>
			<div class="person-2 col-12 col-md-4">
				<img src="images/person-2.jpg" alt="">
				<h4 class="text-uppercase pt-3 border-f pb-2">Bridge Roberts  Creative Genius</h4>
				<p>Amazone blessée du type de Sôsiklès. Copie romaine d'après un original grec Elle rassemble le peuple, les faubourgs et la</p>
				<div class="fg row px-2">
					<a class="btn btn-1 btn-primary btn-lg col-6 fab fa-facebook-f" href="https://www.facebook.com/" role="button"></a>
					<a class="btn btn-3 btn-primary btn-lg col-6 fab fa-dribbble" href="https://dribbble.com/" role="button"></a>
				</div>
			</div>
			<div class="person-3 col-12 col-md-4">
				<img src="images/person-3.jpg" alt="">
				<h4 class="text-uppercase pt-3 border-f pb-2">Malade Garner Chef De Projet</h4>
				<p>Amazone blessée du type de Sôsiklès. Copie romaine d'après un original grec Elle rassemble le peuple, les faubourgs et la</p>
				<div class="fg row px-2 mb-5">
					<a class="btn btn-4 btn-primary btn-lg col-6 fab fab fa-twitter" href="https://twitter.com/" role="button"></a>
					<a class="btn btn-5 btn-primary btn-lg col-6 fab fa-youtube" href="https://www.youtube.com/" role="button"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="mid-block pb-5">
		<div class="mid-info container pt-4">
			<h4 class="text-center text-uppercase pt-5 mb-5">Our features</h4>
			<div class="info-block-1 row pt-5">
				<div class="text-info col-12 col-xl-6">
					<h5 class="col-8 pl-0 mb-5">Visual Composer page builder</h5>
					<p class="mb-4">We include Visual Composer plugin that allow user to create complex layout with visual page builder, you just need to drag and drop the elements or widgets to the page builder interface easily.</p>
					<a class="btn btn-info px-5 py-2 mt-2" href="#" role="button">Lire plus</a>
				</div>
				<div class="mid-img col-12 col-xl-6">
					<img src="images/mid-img.png" alt="">
				</div>
			</div>
			<div class="info-block-2 row mt-5 mb-5 pb-5">
				<div class="text-info col-12 col-lg-6 ml-0 pl-0">
					<img class="ml-0 pl-0 mr-5" src="images/mid-img-2.png" alt="">
				</div>
				<div class=" col-12 col-xl-5 pl-5 ml-5">
					<h5 class="col-8 pl-0 mb-4 mt-3">Customize & live preview</h5>
					<p class="mb-4 pt-3">We include Visual Composer plugin that allow user to create complex layout with visual page builder, you just need to drag and drop the elements or widgets to the page builder interface easily.</p>
					<a class="btn btn-info px-5 py-2 mt-3" href="#" role="button">Lire plus</a>
				</div>
			</div>
		</div>
		
	</div>
	<div class="box-client pb-5 mb-5">
		<div class="box-text">
			<h3 class="text-center mt-5 text-uppercase">What's our clients say?</h3>
		</div>
		<div id="feedback-carousel" class="feedback-carousel carousel slide mt-5 pt-4" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#feedback-carousel" data-slide-to="0" class="active"></li>
			  <li data-target="#feedback-carousel" data-slide-to="1"></li>
			  <li data-target="#feedback-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<div class="container">
					<div class="feedback row ">
						<div class="col-md-3 col-lg-2 text-center">
							<a href="#" class="img-wrap mb-4 mt-4">
								<img src="images/client-1.jpg" alt="" class="img-fluid rounded-circle">
							</a>
						</div>
						<div class="col-md-9 col-lg-10">
							<p class="b-2 pb-0 mb-0 pb-0 pt-0">«</p>
							<p class="feedback-text">
								What’s our clients talking about our product or service. This is only an example to show you quote block effect here.
							</p>
							<p class="text-right text-uppercase avtor"><em>georg clooney</em></p>
							<p class="b-2 pb-0 mb-0 text-right">»</p>
						</div>
					</div>
					</div>
			  </div>
			  <div class="carousel-item">
				<div class="container">
					<div class="feedback row ">
						<div class="col-md-3 col-lg-2 text-center">
							<a href="#" class="img-wrap mb-4 mt-4">
								<img src="images/client-1.jpg" alt="" class="img-fluid rounded-circle">
							</a>
						</div>
						<div class="col-md-9 col-lg-10">
							<p class="b-2 pb-0 mb-0">«</p>
							<p class="feedback-text">
								What’s our clients talking about our product or service. This is only an example to show you quote block effect here.
							</p>
							<p class="text-right text-uppercase avtor"><em>georg clooney</em></p>
							<p class="b-2 pb-0 mb-0 text-right">»</p>
						</div>
					</div>
					</div>
			  </div>
			  <div class="carousel-item">
				<div class="container">
					<div class="feedback row ">
						<div class="col-md-3 col-lg-2 text-center">
							<a href="#" class="img-wrap mb-4 mt-4">
								<img src="images/client-1.jpg" alt="" class="img-fluid rounded-circle">
							</a>
						</div>
						<div class="col-md-9 col-lg-10">
							<p class="b-2 pb-0 mb-0">«</p>
							<p class="feedback-text">
								What’s our clients talking about our product or service. This is only an example to show you quote block effect here.
							</p>
							<p class="text-right text-uppercase avtor"><em>georg clooney</em></p>
							<p class="b-2 pb-0 mb-0 text-right">»</p>
						</div>
					</div>
					</div>
			  </div>
			</div>
			<a class="carousel-control-prev" href="#feedback-carousel" role="button" data-slide="prev">
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#feedback-carousel" role="button" data-slide="next">
			  <span class="sr-only">Next</span>
			</a>
		  </div>

	</div>
	
	<footer class="footer py-3">
		<div class="container">
			<p class="py-4">Copyright © All Rights Reserved. Bridgetech-ma.com.com - Goh.h.com@gmail.com</p>
		</div>
	</footer>

	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
