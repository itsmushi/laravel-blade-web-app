@extends('layouts.app-dashboard')

@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">
						@include('includes.navigations.index')
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Fun Facts Container -->
			<div class="row m-0">
				<a href="{{ url('new-service-category')}}" class="button btn-outline-primary ripple-effect" title="add new"> <i class="icon-line-awesome-pencil"></i> ADD NEW </a>
			</div>

			<div class="row m-0 mt-5">
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th> Category </th>
							<th> Actions </th>
						</tr>
					</thead>
					<tr>
						<td> <a href=""> Category </a> </td>
						<td> 
							<a href="#" class="button btn-outline-primary ripple-effect" title="edit"> <i class="icon-line-awesome-pencil"></i> </a>
							<a href="#" class="button btn-outline-primary  ripple-effect" title="delete"> <i class="icon-material-outline-delete"></i> </a>
						 </td>
					</tr>
				</table>
			</div>

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->

@endsection

