@extends('layouts.userDefault')
@section('content')
	<div id="content" class="container">
			<!-- === BEGIN CONTENT === -->	<div class="row margin-vert-30">
			<!-- Main Column -->
			<div class="col-md-9">
				<!-- Main Content -->
				<div class="headline"><h2 style="color: #009973">Send Us a Message</h2></div>
				
				<!-- Contact Form -->
				<form>
					<label>Name</label>
					<div class="row margin-bottom-20">
						<div class="col-md-6 col-md-offset-0">
							<input class="form-control" type="text">
						</div>
					</div>
					
					<label>Email <span class="color-red">*</span></label>
					<div class="row margin-bottom-20">
						<div class="col-md-6 col-md-offset-0">
							<input class="form-control" type="text">
						</div>
					</div>
					
					<label>Message</label>
					<div class="row margin-bottom-20">
						<div class="col-md-8 col-md-offset-0">
							<textarea rows="8" class="form-control"></textarea>
						</div>
					</div>
					
					<p><button type="submit" class="btn btn-primary">Send Message</button></p>
				</form>
				<!-- End Contact Form -->
				<!-- End Main Content -->
			</div>
			<!-- End Main Column -->
			<!-- Side Column -->
			<div class="col-md-3">
				<!-- Recent Posts -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" style="color: #009973">Contact Info</h3>
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, no cetero voluptatum est, audire sensibus maiestatis vis et. Vitae audire prodesset an his. Nulla ubique omnesque in sit.</p>
						<ul class="list-unstyled">
							<li><i class="fa-phone color-primary"></i>+8801860710020</li>
							<li><i class="fa-phone color-primary"></i>+8801955676069</li>
							<li><i class="fa-envelope color-primary"></i>swapnotthan@gmail.com</li>
							<li><i class="fa-home color-primary"></i>SUST,
										Akhalia, Sylhet 3114</li>
						</ul>
					</div>
				</div>
				<!-- End recent Posts -->
				
			</div>
			<!-- End Side Column -->
		</div>
	</div>
@stop