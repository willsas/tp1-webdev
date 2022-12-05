@extends('default')

@section('content')
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Boxer - Software Landing Page</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="resources/css/app.css">

	</head>
	<body>
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">Latihan Stir mobil</h1>
							<p class="tm-white"> Belajar mobil disini saja </p>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->
		<!-- start divider -->
		<section id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-laptop"></i>
						<h3 class="text-uppercase">Pagi</h3>
						<p>08:00 - 10:00 </p>
					</div>
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-twitter"></i>
						<h3 class="text-uppercase">Siang</h3>
						<p>13:00 - 15:00</p>
					</div>
					<div class="col-md-4 wow fadeInUp templatemo-box" data-wow-delay="0.3s">
						<i class="fa fa-font"></i>
						<h3 class="text-uppercase">Sore</h3>
						<p>16:00 - 18:00 </p>
					</div>
				</div>
			</div>
		</section>
		<!-- end divider -->


		<!-- start pricing -->
		<section id="Harga">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h2 class="text-uppercase">Harga</h2>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
							<div class="pricing-title">
								<h4>Paket 2 jam Matic</h4>
								<p>Rp. 200.000</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing active text-uppercase">
							<div class="pricing-title">
								<h4>Paket 2 jam Manual</h4>
                                <p>Rp. 170.000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end pricing -->
		<!-- start contact -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Contact Us</h2>
							<address>
								<p><i class="fa fa-map-marker"></i>Jl Jeruk No 2 Jakarta</p>
								<p><i class="fa fa-phone"></i> +62816632661</p>
							</address>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
@endSection()