@extends('layouts.app-dashboard')

@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar"><img src="{{URL::asset($applicant->avator)}}" alt="profile"></div>
						<div class="header-details">
							<h3>{{ $applicant->name }} <span></span></h3>
							<ul>
{{--								<li><div class="star-rating" data-rating="5.0"></div></li>--}}
{{--								<li><img class="flag"  alt=""> {{$applicant->email}}</li>--}}
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">

		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">

			<!-- Page Content -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">About Me</h3>
                <p>
                    {{$applicant->about}}
                </p>

			</div>

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Education History</h3>
				</div>
				<ul class="boxed-list-ul">
                    @foreach($educations as $education)
                        <li>
                                <div class="boxed-list-item">
                                    <!-- Content -->
                                    <div class="item-content">
                                        <h4>{{$education->course_title}}<span>{{$education->institution}}</span></h4>
                                        <div class="item-details margin-top-10">
                                            <div class="" >{{$education->qualification}}</div>
                                            <div class="detail-item"><i class="icon-material-outline-date-range"></i> {{$education->start_date}} to {{$education->end_date}} </div>
                                        </div>
                                    </div>
                                </div>
                        </li>
                    @endforeach
{{--					 <li>--}}
{{--						<div class="boxed-list-item">--}}
{{--							<!-- Content -->--}}
{{--							<div class="item-content">--}}
{{--								<h4>WordPress Theme Installation <span>Rated as Freelancer</span></h4>--}}
{{--								<div class="item-details margin-top-10">--}}
{{--									<div class="star-rating" data-rating="5.0"></div>--}}
{{--									<div class="detail-item"><i class="icon-material-outline-date-range"></i> June 2018</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</li>--}}
{{--					<li>--}}
{{--						<div class="boxed-list-item">--}}
{{--							<!-- Content -->--}}
{{--							<div class="item-content">--}}
{{--								<h4>Fix Python Selenium Code <span>Rated as Employer</span></h4>--}}
{{--								<div class="item-details margin-top-10">--}}
{{--									<div class="star-rating" data-rating="5.0"></div>--}}
{{--									<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2018</div>--}}
{{--								</div>--}}
{{--								<div class="item-description">--}}
{{--									<p>I was extremely impressed with the quality of work AND how quickly he got it done. He then offered to help with another side part of the project that we didn't even think about originally.</p>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</li>--}}
{{--					<li>--}}
{{--						<div class="boxed-list-item">--}}
{{--							<!-- Content -->--}}
{{--							<div class="item-content">--}}
{{--								<h4>PHP Core Website Fixes <span>Rated as Freelancer</span></h4>--}}
{{--								<div class="item-details margin-top-10">--}}
{{--									<div class="star-rating" data-rating="5.0"></div>--}}
{{--									<div class="detail-item"><i class="icon-material-outline-date-range"></i> May 2018</div>--}}
{{--								</div>--}}
{{--								<div class="item-description">--}}
{{--									<p>Awesome work, definitely will rehire. Poject was completed not only with the requirements, but on time, within our small budget.</p>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</li> --}}
				</ul>

				<!-- Pagination -->
{{--				<div class="clearfix"></div>--}}
{{--				<div class="pagination-container margin-top-40 margin-bottom-10">--}}
{{--					<nav class="pagination">--}}
{{--						<ul>--}}
{{--							<li><a href="#" class="ripple-effect current-page">1</a></li>--}}
{{--							<li><a href="#" class="ripple-effect">2</a></li>--}}
{{--							<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>--}}
{{--						</ul>--}}
{{--					</nav>--}}
{{--				</div>--}}
{{--				<div class="clearfix"></div>--}}
				<!-- Pagination / End -->

			</div>
			<!-- Boxed List / End -->

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-business"></i> Employment History</h3>
				</div>
				<ul class="boxed-list-ul">
					@foreach ($experiences as $ex )

					<li>
						<div class="boxed-list-item">
							<!-- Avatar -->
{{--							<div class="item-image">--}}
{{--								<img src="images/browse-companies-03.png" alt="">--}}
{{--							</div>--}}

							<!-- Content -->
							<div class="item-content">
								<h4>{{ $ex->job_title }}</h4>
								<div class="item-details margin-top-7">
									<div class="detail-item"><a href="#"><i class="icon-material-outline-business"></i> {{$ex->company}}</a></div>

									<div class="detail-item"><i class="icon-material-outline-date-range"></i> {{$ex->start_date}} - {{$ex->end_date}}</div>
								</div>
{{--								<div class="item-description">--}}
{{--									<p>Focus the team on the tasks at hand or the internal and external customer requirements.</p>--}}
{{--								</div>--}}
							</div>
						</div>
					</li>
					@endforeach
					{{-- <li>
						<div class="boxed-list-item">
							<!-- Avatar -->
							<div class="item-image">
								<img src="images/browse-companies-04.png" alt="">
							</div>

							<!-- Content -->
							<div class="item-content">
								<h4><a href="#">Lead UX/UI Designer</a></h4>
								<div class="item-details margin-top-7">
									<div class="detail-item"><a href="#"><i class="icon-material-outline-business"></i> Acorta</a></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> April 2014 - May 2018</div>
								</div>
								<div class="item-description">
									<p>I designed and implemented 10+ custom web-based CRMs, workflow systems, payment solutions and mobile apps.</p>
								</div>
							</div>
						</div>
					</li> --}}
				</ul>
			</div>
			<!-- Boxed List / End -->

		</div>


		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<!-- Profile Overview -->
{{--				<div class="profile-overview">--}}
{{--					<div class="overview-item"><strong>$35</strong><span>Hourly Rate</span></div>--}}
{{--					<div class="overview-item"><strong>53</strong><span>Jobs Done</span></div>--}}
{{--					<div class="overview-item"><strong>22</strong><span>Rehired</span></div>--}}
{{--				</div>--}}

{{--				<!-- Button -->--}}
{{--				<a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-50">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></a>--}}

{{--				<!-- Freelancer Indicators -->--}}
{{--				<div class="sidebar-widget">--}}
{{--					<div class="freelancer-indicators">--}}

{{--						<!-- Indicator -->--}}
{{--						<div class="indicator">--}}
{{--							<strong>88%</strong>--}}
{{--							<div class="indicator-bar" data-indicator-percentage="88"><span></span></div>--}}
{{--							<span>Job Success</span>--}}
{{--						</div>--}}

{{--						<!-- Indicator -->--}}
{{--						<div class="indicator">--}}
{{--							<strong>100%</strong>--}}
{{--							<div class="indicator-bar" data-indicator-percentage="100"><span></span></div>--}}
{{--							<span>Recommendation</span>--}}
{{--						</div>--}}
{{--						--}}
{{--						<!-- Indicator -->--}}
{{--						<div class="indicator">--}}
{{--							<strong>90%</strong>--}}
{{--							<div class="indicator-bar" data-indicator-percentage="90"><span></span></div>--}}
{{--							<span>On Time</span>--}}
{{--						</div>	--}}
{{--											--}}
{{--						<!-- Indicator -->--}}
{{--						<div class="indicator">--}}
{{--							<strong>80%</strong>--}}
{{--							<div class="indicator-bar" data-indicator-percentage="80"><span></span></div>--}}
{{--							<span>On Budget</span>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				--}}
{{--				<!-- Widget -->--}}
{{--				<div class="sidebar-widget">--}}
{{--					<h3>Social Profiles</h3>--}}
{{--					<div class="freelancer-socials margin-top-25">--}}
{{--						<ul>--}}
{{--							<li><a href="#" title="Dribbble" data-tippy-placement="top"><i class="icon-brand-dribbble"></i></a></li>--}}
{{--							<li><a href="#" title="Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>--}}
{{--							<li><a href="#" title="Behance" data-tippy-placement="top"><i class="icon-brand-behance"></i></a></li>--}}
{{--							<li><a href="#" title="GitHub" data-tippy-placement="top"><i class="icon-brand-github"></i></a></li>--}}
{{--						--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<!-- Widget -->--}}
{{--				<div class="sidebar-widget">--}}
{{--					<h3>Skills</h3>--}}
{{--					<div class="task-tags">--}}
{{--						<span>iOS</span>--}}
{{--						<span>Android</span>--}}
{{--						<span>mobile apps</span>--}}
{{--						<span>design</span>--}}
{{--						<span>Python</span>--}}
{{--						<span>Flask</span>--}}
{{--						<span>PHP</span>--}}
{{--						<span>WordPress</span>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<!-- Widget -->--}}
{{--				<div class="sidebar-widget">--}}
{{--					<h3>Attachments</h3>--}}
{{--					<div class="attachments-container">--}}
{{--						<a href="#" class="attachment-box ripple-effect"><span>Cover Letter</span><i>PDF</i></a>--}}
{{--						<a href="#" class="attachment-box ripple-effect"><span>Contract</span><i>DOCX</i></a>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--				<!-- Sidebar Widget -->--}}
{{--				<div class="sidebar-widget">--}}
{{--					<h3>Bookmark or Share</h3>--}}

{{--					<!-- Bookmark Button -->--}}
{{--					<button class="bookmark-button margin-bottom-25">--}}
{{--						<span class="bookmark-icon"></span>--}}
{{--						<span class="bookmark-text">Bookmark</span>--}}
{{--						<span class="bookmarked-text">Bookmarked</span>--}}
{{--					</button>--}}

{{--					<!-- Copy URL -->--}}
{{--					<div class="copy-url">--}}
{{--						<input id="copy-url" type="text" value="" class="with-border">--}}
{{--						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>--}}
{{--					</div>--}}

{{--					<!-- Share Buttons -->--}}
{{--					<div class="share-buttons margin-top-25">--}}
{{--						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>--}}
{{--						<div class="share-buttons-content">--}}
{{--							<span>Interesting? <strong>Share It!</strong></span>--}}
{{--							<ul class="share-buttons-icons">--}}
{{--								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>--}}
{{--								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>--}}
{{--								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>--}}
{{--								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}

			</div>
		</div>

	</div>
</div>

</div>
<!-- Wrapper / End -->


<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Make an Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">

				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss your project with David</h3>
				</div>

				<!-- Form -->
				<form method="post">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name"/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address"/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
						<label class="uploadButton-button ripple-effect" for="upload">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>

				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>
			<!-- Login -->
			<div class="popup-tab-content" id="loginn">

				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss Your Project With Tom</h3>
				</div>

				<!-- Form -->
				<form method="post" id="make-an-offer-form">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name2" id="name2" placeholder="First and Last Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress2" id="emailaddress2" placeholder="Email Address" required/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" multiple/>
						<label class="uploadButton-button" for="upload-cv">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>

				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="make-an-offer-form">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Make an Offer Popup / End -->

@endsection
