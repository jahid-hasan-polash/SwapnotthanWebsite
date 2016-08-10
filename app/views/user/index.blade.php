@extends('layouts.userDefault')
@section('content')
	<div class="container">
			<div class="row margin-top-30">
				<div class="col-md-12 text-center">
					<h1 class"text-center" style="color:#ff3300">Swapnotthan</h1>
					<p class"text-center">A voluntary organization of Shahjalal University of Science &amp; Technology, Sylhet</p>
				</div>
			</div>

			<div class="row margin-top-10">
				<!-- Carousel Slideshow -->
				<div id="carousel-example" class="carousel slide" data-ride="carousel">
					<!-- Carousel Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example" data-slide-to="1"></li>
						<li data-target="#carousel-example" data-slide-to="2"></li>
						<li data-target="#carousel-example" data-slide-to="3"></li>
					</ol>
					<!-- End Carousel Indicators -->
					<!-- Carousel Images -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="asset/img/slideshow/slide1.jpg">
						</div>
						<div class="item">
							<img src="asset/img/slideshow/slide2.jpg">
						</div>
						<div class="item">
							<img src="asset/img/slideshow/slide3.jpg">
						</div>
						<div class="item">
							<img src="asset/img/slideshow/slide4.jpg">
						</div>
					</div>
					<!-- End Carousel Images -->
					<!-- Carousel Controls -->
					<a class="left carousel-control" href="#carousel-example" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
					<!-- End Carousel Controls -->
				</div>
				<!-- End Carousel Slideshow -->
			</div>

			<div class="row margin-vert-30">
				<!-- Main Text -->
				<div class="col-md-9">
					<h2 style="color: #009973">Our Mission</h2>
					<p>{{$missionDetail->description}}</p>
					<a class="btn btn-success" href="#"><!-- Read More page -->
						Read More
						<i class="fa-chevron-right"></i>
					</a>
				</div>
				<!-- End Main Text -->
				<!-- Side Column -->
				<div class="col-md-3">
					<h2 class="margin-bottom-10 " style="color: #009973">Latest News</h2>
					<ul class="menu">
						@foreach($newses as $news)
							<a class="fa-angle-right" href="{{URL::route('newsDetails', $news->id)}}">{{$news->title}}</a>
						@endforeach
					</ul>
				</div>
				<!-- End Side Column -->
			</div>

			<!-- Portfolio -->
				<!-- Portfolio Item This should be generated-->
				<h2 style="color: #009973">Working Sectors</h2>
				<!-- for each campaign -->
				@foreach($sectors as $sector)
				<div class="portfolio-item col-sm-4 animate fadeIn">
					<div class="image-hover">
						<a href="{{URL::route('sectorDetails', $sector->id)}}">
							<figure>
								<img src="asset/img/frontpage/filler1.jpg" alt="image1">
								<div class="overlay">
									<a class="expand" href="#">Image Link</a>
								</div>
							</figure>
							<h3 class="margin-top-20" style="color: #009973">{{$sector->title}}</h3>
							<p class="margin-top-10 margin-bottom-20">{{$sector->description}}</p>
							<div class="btn btn-danger">
								<a class="info" href="{{URL::route('sectorDetails', $sector->id)}}">Read more</a>
							</div>
						</a>
					</div>
				</div>
				@endforeach


	</div>
			<br>
			<div class="row">
				<h2 class="text-center margin-top-10" style="color: #3366ff">ALONE WE CAN DO SO LITTLE; BUT TOGETHER WE CAN DO SO MUCH</h2>
				<p class="text-center margin-bottom-30">Join us in the way of helping and building a better future</p>
			</div>


@stop