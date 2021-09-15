@extends('layouts.app')
@section('styles_login_register')
<link href="{{ asset('css/icons.css') }}" rel="stylesheet">
<link href="{{ asset('css/orange.css') }}" rel="stylesheet">
@stop

@section('content')

<!-- Titlebar
================================================== -->
<div class="soltag-header-single" style="background-image: url('img/slide2.jpg');">
	<div class="container-lg-stag inner-title">
		<div class="row m-0 w-100">
			<div class="col-lg-6">
				<h2 class="title"> View Training <span class="circle"></span> </h2>
			</div>
		</div>
	</div>
</div>

<!-- Page Content
================================================== -->
<section class="container-lg-stag">
	<div class="center-cols train-section">
		<div class="row w-100 pt-2 pb-2 border-bottom">
			<h2 class="title_01"><span class="decor"> TRAINING SESSION TITLE OR THE TRAINING SUBJECT </span></h2>
		</div>
		<div class="row mt-3 m-0 w-100">
			<div class="col-lg-3">
				<h5> STARTS </h5>
				<label> May 6, 12:00 AM</label>
			</div>
			<div class="col-lg-3">
				<h5> ENDS </h5>
				<label> May 6, 12:00 AM</label>
			</div>
			<div class="col-lg-3">
				<h5> VEMUE </h5>
				<label> Kijazi Hall </label>
			</div>
			<div class="col-lg-3">
				<h5> TRAINERS </h5>
				<label> SolutionsTag Staff</label>
			</div>
		</div>
	</div>
</section>

<section class="container-lg-stag">
	<div class="row m-0">
		<div class="col-lg-12">
			<p class="pb-5 pt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.</p>
		</div>
	</div>
</section>

<section class="container-lg-stag">
	<div class="row m-0">
		<div class="col-lg-6">
			<img src="{{ asset('img/slide1.jpg')}}" class="event-img" role="img" title="local staff" alt="local staff solutions tag" />
		</div>
		<div class="col-lg-6">
			<form>
				<div class="row">
					<!-- Segment -->
					<div class="dashboard-box mt-3 mb-3">
						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> REGISTER </h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row m-0">
								<label> Names  </label>
								<input class="with-border">
							</div>
						</div>
					</div>
				</div>
				<div class="row m-0 mt-5 mb-5">
					<a href="#" class="button btn-outline-primary ripple-effect" title="submit"> SUBMIT </a>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection