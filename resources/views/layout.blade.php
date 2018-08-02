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
					<a href="/" class="freighthub-text">
						<span class="freight-text">Freight</span>Hub</a>
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
			@if (Auth::check()) @else
			<div class="mobile-divider"></div>
			@endif
		</div>
		<div class="col-xl-2">
			<ul class="list-group">
				<li class="list-group-item">
					@if (Auth::check())
					<a href="#" class="menu-bold"></a>
					@else
					<a href="/login" class="menu-bold">
						<i class="fas fa-user-circle"></i>Sign In
						<i class="fas fa-angle-right"></i>
					</a>
					@endif
				</li>


				<!-- @if (Auth::check())

				<a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"></a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>

				@else
				<a href="/login">
					<li>
						<button>Sign In / Sign Up</button>
					</li>
				</a>
				@endif -->



				<!-- @if (Auth::check())
				<li class="list-group-item">
				<a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
				</li>
				@else
				<li class="list-group-item">
					<a href="/register" class="signup-button">Signup Now</a>
				</li>
				@endif -->


			</ul>
			<div class="mobile-divider"></div>
		</div>
		<div class="col-xl-2">
			<ul class="list-group">
				<!-- <li class="list-group-item">
					<a href="#" class="signup-button">Signup Now</a>
				</li> -->
				@if (Auth::check())
				<li class="list-group-item">
				<a href="{{ route('logout') }}" class="signup-button" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
				</li>
				@else
				<li class="list-group-item">
					<a href="/register" class="signup-button">Signup Now</a>
				</li>
				@endif
			</ul>
		</div>
	</div>

	@yield('content')

	<footer class="footer-section">
		<div class="primary-section row no-margin">
			<div class="col-xl-4">
				<!-- <ul class="list-group"> -->
				<li class="list-group-item freighthub-text-container">
					<a href="/" class="freighthub-text">
						<span class="freight-text">Freight</span>Hub</a>
				</li>
				</ul>
				<div class="mobile-divider"></div>
			</div>
			<div class="col-xl-2 col-sm-6">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#" class="menu-bold">FreightHub</a>
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
			</div>
			<div class="col-xl-2 col-sm-6">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#" class="menu-bold">Services</a>
					</li>
					<li class="list-group-item">
						<a href="#">Sea Freight</a>
					</li>
					<li class="list-group-item">
						<a href="#">Air Freight</a>
					</li>
					<li class="list-group-item">
						<a href="#">Rail Freight</a>
					</li>
					<li class="list-group-item">
						<a href="#">Transportation</a>
					</li>
				</ul>
			</div>
			<div class="col-xl-4 last-column">
				<ul class="list-group">
					<li class="list-group-item">
						<a class="filler">Filler</a>
					</li>
					<li class="list-group-item">
						<a href="#">Imprint</a>
					</li>
					<li class="list-group-item">
						<a href="#">Terms of Use</a>
					</li>
					<li class="list-group-item">
						<a href="#">Terms & Conditions</a>
					</li>
					<li class="list-group-item">
						<a href="#">Privacy Protection</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="secondary-section row no-margin">
			<div class="mobile-divider"></div>
			<div class="col-xl-4"></div>
			<div class="col-xl-3">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#">© 2018 FreightHub. All rights reserved. </a>
					</li>
				</ul>
			</div>
			<div class="col-xl-2">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#" class="footer-social-icon">
							<i class="fab fa-forumbee"></i>
						</a>
						<a href="#" class="footer-social-icon">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="#" class="footer-social-icon">
							<i class="fab fa-twitter-square"></i>
						</a>
						<a href="#" class="footer-social-icon">
							<i class="fab fa-trello"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-xl-2">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#" class="phone-link">
							<i class="fas fa-phone-square"></i>+ 44 567 958 18</a>
					</li>
				</ul>
			</div>
			<div class="col-xl-1">
				<ul class="list-group">
					<li class="dropdown dropleft list-group-item">
						<a class="menu-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							EN
							<i class="fas fa-angle-down"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">FR</a>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="last-section row no-margin">
			<!-- <div class="mobile-divider"></div> -->
			<div class="col-xl-4 filler"></div>
			<div class="col-xl-8">
				<ul class="list-group">
					<li class="list-group-item footer-site-details">
						<p>*MSRP excludes destination, taxes, tite and registration fees. Starting at price refers to the base model, optional
							equipment not included. A more expensive model may be shown. Pricing and offers may change at any time without notification.
							To get full pricing details, see your dealer.
							<br>FCA strives to ensure that it's website is accessible to individuals with disabilities. Should you encounter an issue
							accessing any content on Dodge.com, please contact our Customer Service Team at 800-4FreightHub, for further assistance
							or to report a problem.
							<br>Access to https://www.freighthub.com/webselfservice/index.html is subject to FCA's Privacy Policy and Terms of Use.
						</p>
						<p>FreightHub has the potential to disrupt liner shipping just like Airbnb - asset-light and with a pure focus on customer
							satisfaction
						</p>
						<p>FreightHub is revolutionizing international freight forwarding by providing real-time quotes and insights, digitizing
							old processes, and delivering transparency to it's customers. We are a full-service freight forwarder, offering global
							FCL, LCL and air transportation, and we are driven by technology and a strong team of experienced logistics specialists.</p>
						<p>We are the freight forwarder for the 21st century!</p>
					</li>
				</ul>
			</div>
		</div>

		<div class="background-section"></div>
	</footer>

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