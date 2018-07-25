<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Freight Hub</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
	 crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="/css/app.css">
</head>

<body>
	<nav class="navbar-expand-xl navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
		 aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<div class="dropdown-divider"></div>
			<div class="col-4">
				<ul class="list-group">
					<li class="list-group-item phone-link">
						<a href="tel:+4456795818" class="phone-link">
							<i class="fas fa-phone-square"></i>+ 44 567 958 18</a>
					</li>
				</ul>
			</div>
			<div class="dropdown-divider"></div>
			<div class="col-2">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#">Blog</a>
					</li class="list-group-item">
				</ul>
			</div>
			<div class="col-2">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#">Careers</a>
					</li>
				</ul>
			</div>
			<div class="col-2">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#">Contact Sales</a>
					</li>
				</ul>
			</div>
			<div class="col-2">
				<ul class="list-group">
					<li class="dropdown list-group-item">
						<a class="language-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-globe"></i>Language
							<i class="fas fa-angle-down"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">English</a>
							<a class="dropdown-item" href="#">French</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="secondary-nav row no-margin">
		<div class="col-xl-4">
			<ul class="list-group">
				<li class="list-group-item freighthub-text-container">
					<a href="/" class="freighthub-text"><span class="freight-text">Freight</span>Hub</a>
				</li>
			</ul>
			<div class="mobile-divider"></div>
		</div>
		<div class="col-xl-2">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="#" class="menu-bold">Freight Hub</a>
				</li class="list-group-item">
				<li class="list-group-item">
					<a href="#">Features</a>
				</li class="list-group-item">
				<li class="list-group-item">
					<a href="#">Customer Stories</a>
				</li class="list-group-item">
				<li class="list-group-item">
					<a href="#">Amazon FBA</a>
				</li class="list-group-item">
			</ul>
			<div class="mobile-divider"></div>
		</div>
		<div class="col-xl-2">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="#" class="menu-bold">About Us</a>
				</li>
				<li class="list-group-item">
					<a href="#">Company</a>
				</li>
				<li class="list-group-item">
					<a href="#">FAQ</a>
				</li>
			</ul>
			<div class="mobile-divider"></div>
		</div>
		<div class="col-xl-2">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="#" class="menu-bold">
						<i class="fas fa-user-circle"></i>Sign In
						<i class="fas fa-angle-right"></i>
					</a>
				</li>
			</ul>
			<div class="mobile-divider"></div>
		</div>
		<div class="col-xl-2">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="#" class="signup-button">Signup Now</a>
				</li>
			</ul>
		</div>
	</div>

	<section class="hero-section row align-items-center">
		<div class="container">
			<div class="hero-title">
				<h2>Global Freight</h2>
				<h2>Forwarder</h2>
			</div>
			<div class="hero-description">
				<p>Ship more freight faster and cheaper</p>
				<p>Modern freight forwarding made easy</p>
			</div>
			<div class="hero-cta">
				<a href="#">Talk with us about freight</a>
				<a href="#">
					<i class="fas fa-clipboard"></i>Learn more
					<i class="fas fa-angle-right"></i>
				</a>
			</div>
			<div class="hero-image-description">
				<p>Sea Transportation</p>
			</div>
		</div>
	</section>

	<section class="benefits-section container row">
		<div class="benefits-title col-lg-6">
			<h3>Benefits introduction</h3>
		</div>
		<div class="benefits-description col-lg-4 ">
			See how FreighHub is helping businsses like yours to streamline their logistics. Ship more freight faster and cheaper – modern
			freight forwarding made easy
		</div>
	</section>

	<section class="features-section container">
		<ul class="nav selected-filter row justify-content-between" id="pills-tab" role="tablist">
			<li class="nav-item col-lg-4">
				<a class="nav-link active" id="reliability-tab" data-toggle="pill" href="#reliability" role="tab" aria-controls="reliability"
				 aria-selected="true">
					<i class="far fa-calendar-alt"></i>Reliability</a>
			</li>
			<li class="nav-item col-lg-4">
				<a class="nav-link" id="transparency-tab" data-toggle="pill" href="#transparency" role="tab" aria-controls="transparency"
				 aria-selected="false">
					<i class="far fa-map"></i>Transparency</a>
			</li>
			<li class="nav-item col-lg-4">
				<a class="nav-link" id="efficiency-tab" data-toggle="pill" href="#efficiency" role="tab" aria-controls="efficiency" aria-selected="false">
					<i class="far fa-chart-bar"></i>Efficiency</a>
			</li>
		</ul>

		<!-- Reliability Tab -->

		<!-- Left Side -->
		<div class="tab-content" id="tabContent">
			<div class="tab-pane fade show active row no-margin justify-content-between" id="reliability" role="tabpanel" aria-labelledby="reliability-tab">
				
				<div class="tab-pane-container col-lg-4">
					<div class="tab-title">
						<h3>Shipments should be on time</h3>
						<h3>We make it happen</h3>
					</div>
					<div class="tab-description">
						<p>Our mix of data driven technology and human logistics experts solves problems before they occur. Track you shipments
							and get a notification for you ETA. There is no easier way to structure based on reliable data.</p>
					</div>
					<div class="tab-cta">
						<a href="#" class="learn-more">
							<i class="fas fa-clipboard"></i>Learn more
							<i class="fas fa-angle-right"></i>
						</a>
					</div>
				</div>

				<!-- Right Side -->
				<div class="tab-image-container col-lg-7">
					<div class="tab-image">
						<img src="/images/ipad-mockup.png" alt="">
					</div>
				</div>
			</div>

			<!-- Transparency Tab -->

			<div class="tab-pane fade row no-margin justify-content-between" id="transparency" role="tabpanel" aria-labelledby="transparency-tab">
				<div class="tab-pane-container col-lg-4">
					<div class="tab-title">
						<h3>You see what we see</h3>
					</div>
					<div class="tab-description">
						<p>Never be out of the loop – you're not treated as a customer, you're treated like one of us. This makes aspects such as shipping times, cost and any bumps on the road fully visable ahead of time.</p>
					</div>
					<div class="tab-cta">
						<a href="#" class="learn-more">
							<i class="fas fa-clipboard"></i>Learn more
							<i class="fas fa-angle-right"></i>
						</a>
					</div>
				</div>

				<!-- Right Side -->
				<div class="tab-image-container col-lg-7">
					<div class="tab-image">
						<img src="/images/ipad-mockup.png" alt="">
					</div>
				</div>
			</div>

			<!-- Efficiency Tab -->

			<div class="tab-pane fade row no-margin justify-content-between" id="efficiency" role="tabpanel" aria-labelledby="efficiency-tab">
				<div class="tab-pane-container col-lg-4">
					<div class="tab-title">
						<h3>Award winning delivery times</h3>
					</div>
					<div class="tab-description">
						<p>Rated #1 by 'Consumer Reports 2018' for fastest shipping times when compared to the next top 3 competetors. Choose us and get your freight on time.</p>
					</div>
					<div class="tab-cta">
						<a href="#" class="learn-more">
							<i class="fas fa-clipboard"></i>Learn more
							<i class="fas fa-angle-right"></i>
						</a>
					</div>
				</div>

				<!-- Right Side -->
				<div class="tab-image-container col-lg-7">
					<div class="tab-image">
						<img src="/images/ipad-mockup.png" alt="">
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="hero-testimonial-section container">
		<div class="row">
			<div class="col-lg-12">
				<h2>You're in good company – Meet some of our partners and 800+ customers!</h2>
			</div>
		</div>
		<div class="primary-testimonial row justify-content-center">
			<div class="testimonial-image col-lg-3">
				<img src="/images/businessman-headshot.jpeg" alt="Businessman Headshot">
			</div>
			<div class="testimonial-quote col-lg-5">
				<p>"Smooth handling of Asia and direct communication when needed made the process easier and eliminated unnecessary grinding"</p>
				<div class="row testimonial-info">
					<p class="col-12">Max, Head of Logistics</p>
					<p class="col-12">Home24</p>
				</div>
			</div>
		</div>
				<div class="company-logos row justify-content-center">
					<div class="col-lg-2"><img src="/images/nea-logo1.png" alt="NEA Company Logo"></div>
					<div class="col-lg-2"><img src="/images/hq-logo1.png" alt="HQ Company Logo"></div>
					<!-- <i class="fab fa-slack-hash"></i> -->
					<div class="col-lg-2"><img src="/images/viessmann-logo1.png" alt="Viessmann Company Logo"></div>
					<div class="col-lg-2"><img src="/images/blocpower-logo1.png" alt="Bloc Power Company Logo"></div>
				</div>
	</section>



	<!-- Script Imports-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
	 crossorigin="anonymous"></script>

	<script src="/js/app.js"></script>
</body>

</html>