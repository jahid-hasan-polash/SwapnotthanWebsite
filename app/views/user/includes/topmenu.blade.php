<div id="pre_header" class="visible-lg"></div>
	<div id="header" class="container" style="padding-top:10px">
		<div class="row">
			<!-- Logo -->
			<div class="logo" >
				<a href="{{URL::route('index')}}" title="Swapnotthan">
					<!-- <img src="asset/img/logo.png" alt="Logo" /> -->
					{{HTML::image("asset/img/logoSwapnotthan.png",'',array('width'=>'323px'))}}

				</a>
			</div>
			<!-- End Logo -->
			<!-- Top Menu -->
			<div class="col-md-12 margin-top-30">

				<div id="hornav" class="pull-right visible-lg">
					<ul class="nav navbar-nav">
						<li><a href="{{URL::route('index')}}" >Home</a></li>
						<li><a href="{{URL::route('whatWeDo')}}" >What We Do</a></li>
						<li><span>Members</span>
							<ul>
								<li><a href="{{URL::route('general')}}">General</a></li>
								<li><a href="{{URL::route('executive')}}">Executive</a></li>
							</ul>
						</li>
						<li><a href="{{URL::route('getInvolved')}}">Get Involved</a></li>
						<li><a href="{{URL::route('contact')}}" >Contact</a></li>
						<!--<li><a href="http://www.swapnotthan.org/sweccha/" class="btn btn-success">Sweccha</a></li>-->
					</ul>
				</div>
			</div>
				<div class="clear"></div>
				<!-- End Top Menu -->
		</div>
	</div>