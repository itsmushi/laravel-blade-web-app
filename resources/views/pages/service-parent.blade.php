@extends('layouts.app')
@section('styles_login_register')
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orange.css') }}" rel="stylesheet">
@stop

@section('content')

    <!-- Titlebar
================================================== -->
    <div class="soltag-header-single" style="background-image: url('{{URL::asset("img/slide2.jpg")}}') ;">
        <div class="container-lg-stag inner-title">
            <div class="row m-0 w-100">
                <div class="col-lg-6">
                    <h2 class="title text-white">
                        {{ $selectedService->title }}
                        {{-- <span class="circle"></span> Reservoir Management Services --}}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content
    ================================================== -->
    <section class="container-lg-stag">

        <div class="center-cols train-section">
            <div class="row w-100 ">
                <div class="col-lg-6">
                    <h2 class="title_01"> {{ $selectedService->title }} </h2>
                    <p class="m40"> {{ $selectedService->description }} </p>
                </div>
                <div class="col-lg-6">
                    <div class="training-img-container">
                        <img src="{{ asset($selectedService->cover)}}" class="leftimage" role="img" title="local staff"
                             alt="local staff solutions tag"/>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="featuresmain ">

        <div class="container-lg-stag-2">

            <div class="row m-0">

                <div class="col-lg-4">
                    <h3 class="title_03"> Others Services: </h3>
                    <div class="list-group">
                        @foreach($services as $service)
                            <button type="button" class="list-group-item list-group-item-action"><a
                                    href="/service/{{$service->id."/".$service->title}}">{{$service->title}}</a>
                            </button>
                        @endforeach

                    </div>
                </div>

                <div class="col-lg-8 bgprimary-main py-3">

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2 class="title_01"> {{ $selectedService->bottom_title }} </h2>
                                <p class="m40" style="text-align: justify;">
                                    {{ $selectedService->bottom_description }}
                                </p>
                                <div class="btn-descr-img"
                                     style="background-image: url('{{URL::asset($selectedService->bottom_cover)}}') ;">

                                </div>
                            </div>
                            @if($selectedService->bottom_title2!=null)
                                <div class="carousel-item">
                                    <h2 class="title_01"> {{ $selectedService->bottom_title2 }} </h2>
                                    <p class="m40" style="text-align: justify;">
                                        {{ $selectedService->bottom_description2 }}
                                    </p>
                                    <div class="btn-descr-img"
                                         style="background-image: url('{{URL::asset($selectedService->bottom_cover2)}}') ;">

                                    </div>
                                </div>
                            @endif
                            @if($selectedService->bottom_title3!=null)
                                <div class="carousel-item">
                                    <h2 class="title_01"> {{ $selectedService->bottom_title3 }} </h2>
                                    <p class="m40" style="text-align: justify;">
                                        {{ $selectedService->bottom_description3 }}
                                    </p>
                                    <div class="btn-descr-img"
                                         style="background-image: url('{{URL::asset($selectedService->bottom_cover3)}}') ;">

                                    </div>
                                </div>
                            @endif

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    {{--                    <h2 class="title_01"> {{ $service->bottom_title }} </h2>--}}
                    {{--                    <p class="m40" style="text-align: justify;">--}}
                    {{--                        {{ $service->bottom_description }}--}}
                    {{--                    </p>--}}
                    {{--                    <div class="btn-descr-img"--}}
                    {{--                         style="background-image: url('{{URL::asset($service->bottom_cover)}}') ;">--}}

                    {{--                    </div>--}}
                </div>
            </div>

            <div class="row m-0 pt-10 service-items">
                @foreach ($selectedService->subService as $sub )
                    @php
                        $sub_slug = str_slug($sub->title, '-');
                    @endphp
                    <div class="col-lg-3 service-item"
                         onclick="location.href='{{ url('service-child/'.$sub->id.'/'.$sub_slug) }}'">
                        <div class="icon-item">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                 viewBox="0 0 512 512">
                                <path
                                    d="M273.12,243.312a5.977,5.977,0,0,0,1.953-.329,58.215,58.215,0,0,0,11.776-5.6,58.9,58.9,0,0,0,10.524-8.363,58.278,58.278,0,0,0,15.979-29.776,6,6,0,0,0-11.764-2.372,46.321,46.321,0,0,1-12.7,23.664,46.871,46.871,0,0,1-8.376,6.657,46.2,46.2,0,0,1-9.344,4.442,6,6,0,0,0,1.953,11.675Z"/>
                                <path
                                    d="M464.773,255.071,425.7,246.447a174.8,174.8,0,0,0-17.715-42.763l21.54-33.725a6,6,0,0,0-.814-7.472L385.2,118.978a6,6,0,0,0-7.473-.814L344,139.705c-3.213-1.861-6.5-3.621-9.818-5.275L261.177,9.8a6,6,0,0,0-10.354,0l-73,124.627c-3.306,1.646-6.595,3.409-9.823,5.28l-33.725-21.54a6,6,0,0,0-7.473.814l-43.51,43.509a6,6,0,0,0-.814,7.472l21.54,33.725A174.8,174.8,0,0,0,86.3,246.447l-39.071,8.624a6,6,0,0,0-4.707,5.859v61.52a6,6,0,0,0,4.708,5.86l39.07,8.613A174.739,174.739,0,0,0,104.013,379.7L82.473,413.42a6,6,0,0,0,.815,7.473l43.51,43.5a6,6,0,0,0,7.472.814l33.722-21.54a174.486,174.486,0,0,0,42.766,17.725l8.623,39.071a6,6,0,0,0,5.859,4.707h61.52a6,6,0,0,0,5.859-4.707l8.623-39.071a174.486,174.486,0,0,0,42.766-17.725l33.722,21.54a6,6,0,0,0,7.472-.814l43.51-43.5a6,6,0,0,0,.815-7.473L407.987,379.7A174.739,174.739,0,0,0,425.7,336.923l39.07-8.613a6,6,0,0,0,4.708-5.86V260.93A6,6,0,0,0,464.773,255.071Zm-7.293,62.558L419.508,326a6,6,0,0,0-4.538,4.442,162.8,162.8,0,0,1-19.155,46.248,6,6,0,0,0,.068,6.35l20.935,32.776L380.127,452.5,347.35,431.563A6,6,0,0,0,341,431.5a162.606,162.606,0,0,1-46.237,19.163,6,6,0,0,0-4.44,4.537L281.94,493.17H230.06L221.679,455.2a6,6,0,0,0-4.44-4.537A162.606,162.606,0,0,1,171,431.5a6,6,0,0,0-6.352.066L131.873,452.5,95.182,415.816l20.935-32.776a6,6,0,0,0,.068-6.35A162.8,162.8,0,0,1,97.03,330.442,6,6,0,0,0,92.492,326L54.52,317.629V265.75l37.973-8.381a6,6,0,0,0,4.537-4.441,162.865,162.865,0,0,1,19.155-46.239,6,6,0,0,0-.068-6.349L95.182,167.563l36.692-36.691,32.776,20.935a6,6,0,0,0,2.589.9c-1.078,2.044-2.094,4.121-3.022,6.22a6,6,0,0,0,10.975,4.852,88.927,88.927,0,0,1,4.6-8.974L256,24.7l76.212,130.1a88.328,88.328,0,1,1-164.458,48.433c-.056-1.265-.084-2.552-.084-3.825a88.432,88.432,0,0,1,1.4-15.65,6,6,0,1,0-11.81-2.128,100.485,100.485,0,0,0-1.588,17.778c0,.6.028,1.194.039,1.794A134.547,134.547,0,0,0,120.92,291.69c0,74.483,60.6,135.08,135.08,135.08s135.08-60.6,135.08-135.08A134.618,134.618,0,0,0,356.3,201.214a99.989,99.989,0,0,0-11.54-48.51,5.98,5.98,0,0,0,2.592-.9l32.776-20.935,36.692,36.691L395.883,200.34a6,6,0,0,0-.068,6.349,162.865,162.865,0,0,1,19.155,46.239,6,6,0,0,0,4.537,4.441l37.973,8.381Zm-102.886-99.62A123.078,123.078,0,1,1,157.407,218a100.323,100.323,0,0,0,197.187.007Z"/>
                            </svg>
                        </div>
                        <h3> {{ $sub->title }} </h3>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection
