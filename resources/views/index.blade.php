@extends('layout') 

@section('content')

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
					<p>Never be out of the loop – you're not treated as a customer, you're treated like one of us. This makes aspects such
						as shipping times, cost and any bumps on the road fully visable ahead of time.</p>
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
					<p>Rated #1 by 'Consumer Reports 2018' for fastest shipping times when compared to the next top 3 competetors. Choose us
						and get your freight on time.</p>
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
	<div class="row no-margin">
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
			<div class="row align-items-center">
				<div class="testimonial-logo col-2">
					<i class="fab fa-slack-hash"></i>
				</div>
				<div class="testimonial-info row col-10">
					<p class="col-lg-12">Max, Head of Logistics</p>
					<p class="col-lg-12">Home24</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="customers-logos-section container">
	<div class="company-logos row justify-content-center">
		<div class="col-lg-2">
			<img src="/images/nea-logo.png" alt="NEA Company Logo">
		</div>
		<div class="col-lg-2">
			<img src="/images/hq-logo.png" alt="HQ Company Logo">
		</div>
		<div class="col-lg-2">
			<img src="/images/viessmann-logo.png" alt="Viessmann Company Logo">
		</div>
		<div class="col-lg-2">
			<img src="/images/blocpower-logo.png" alt="Bloc Power Company Logo">
		</div>
	</div>
</section>

<section class="testimonials-section container">
	<div class="row justify-content-around">
		<!-- Card 1 -->
		<div class="testimonial-card col-lg-5">
			<div class="testimonial-card-content">
				<p class="testimonial-quote">FreightHub has the potential to disrupt liner shipping just like Airbnb – asset-light and with pure focus on customer
					satisfaction.
				</p>
				<div class="row align-items-center">
					<div class="testimonial-image col">
						<img src="/images/testimonial-1.jpeg" alt="Testimonial 1 Headshot">
					</div>
					<div class="testimonial-logo col-1">
						<i class="fas fa-spa"></i>
					</div>
					<div class="row testimonial-info col-8">
						<p class="col-lg-12">Brian H, Opteo Company</p>
						<p class="col-lg-12">Hamburg Sud</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Card 2 -->
		<div class="testimonial-card col-lg-5">
			<div class="testimonial-card-content">
				<p class="testimonial-quote">My customers depend on reliable and fast delivery of our goods. FreightHub's smooth service and support team gives me
					the confidence to meet these requirements.</p>
				<div class="row align-items-center">
					<div class="testimonial-image col">
						<img src="/images/testimonial-2.jpeg" alt="Testimonial 2 Headshot">
					</div>
					<div class="testimonial-logo col-1">
						<i class="fas fa-leaf"></i>
					</div>
					<div class="row testimonial-info col-8">
						<p class="col-lg-12">Prof. Dr. Burkert Schwenkert</p>
						<p class="col-lg-12">Chairman of Advisory Board</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="testimonial-cta row justify-content-center">
		<a href="#">Check other stories</a>
	</div>
</section>

<section class="demo-newsletter-section row no-margin">
	<!-- Demo Section -->
	<div class="demo-section container col-lg-4">
		<div class="demo-glance">
			<i class="far fa-file-alt"></i>
		</div>
		<div class="demo-primary">
			<h2>Foundation for freight it's FreightHub</h2>
		</div>
		<div class="demo-secondary">
			<p>Our mix of data technology and human logistics experts</p>
		</div>
		<div class="demo-cta">
			<a href="#">
				<i class="fas fa-calendar"></i>Schedule a demo
				<i class="fas fa-angle-right"></i>
			</a>
		</div>
	</div>
	<div class="mobile-divider"></div>
	<!-- Newsletter Section -->
	<div class="newsletter-section container col-lg-4">
		<div class="newsletter-glance">
			<p>Newsletter</p>
		</div>
		<div class="newsletter-primary">
			<h2>Not a customer yet?
				<br> Curious how FreightHub works for large organizations?</h2>
		</div>
		<div class="newsletter-input">
			<input type="text" placeholder="E-mail address">
		</div>
		<div class="newsletter-submit">
			<a href="#">
				<i class="fas fa-keyboard"></i>Subscribe
				<i class="fas fa-angle-right"></i>
			</a>
		</div>
		<div class="newsletter-secondary">
			<p>With additional security, compliance, and administrative features</p>
		</div>
	</div>
</section>

<section class="analytics-section">
	<div class="analytics-title row no-margin justify-content-center">
		<h2>The FreightHub Experience</h2>
	</div>
	<div class="analytics-stats row no-margin justify-content-center">
		<div class="col-lg-2">
			<h3>94
				<sup>%</sup>
			</h3>
			<p>of all shipments on time</p>
		</div>
		<div class="col-lg-2">
			<h3>120,000</h3>
			<p>over containers shipped</p>
		</div>
		<div class="col-lg-2">
			<h3>96
				<sup>%</sup>
			</h3>
			<p>of our customers would recommend FreightHub</p>
		</div>
		<div class="col-lg-2">
			<h3>20
				<sup>H</sup>
			</h3>
			<p>hours saved due to better processes</p>
		</div>
	</div>
</section>

@endsection