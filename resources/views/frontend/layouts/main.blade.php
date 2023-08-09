@extends('frontend.layouts.app')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @endpush

    @include('frontend.layouts.common.slider')

    <section class="section blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="single-post" id="about">
                            <div class="col-md-12 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                                <div class="section-title">
                                    <h2>ABOUT US</h2>
                                </div>

                                <iframe style="width: 100%; min-height: 300px"  src="https://www.youtube.com/embed/{{getOwnYoutubeIdForEmbed($about->video)}}"
                                title="YouTube video player" allowfullscreen></iframe>
                                <p class="mt-4 mx-5"> {!!$about->description!!}</p>
                                <p class="date mt-2"><em>Last Updated: {{$about->updated_at}}</em></p>


                            </div>
                        </div><!-- single-post -->


                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Approaches</h2>

                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <button type="button" class="caegory-btn" data-toggle="modal" data-target="#missionModal">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('assets/uploads/mission/'.$mission->image) }}" class="card-img-top">
                                        </div>
                                        <div class="icons">
                                            <div class="left-area">
                                                <a class=" caegory-btn" href="#"><b>Mission</b></a>
                                            </div>
                                        </div>


                                            <p > {!! Str::limit(strip_tags($mission->description), 100) !!} ...</p>
                                    </button>


                                    <!-- Modal -->
                                    <div class="modal fade" id="missionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <!-- Add your image here -->
                                                    <p>   {!! $mission->description !!}... </p>                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-">
                                <div class="single-post">
                                    <button type="button" class="caegory-btn" data-toggle="modal" data-target="#planModal">
                                        <div class="image-wrapper">
                                            <img src="{{  asset('assets/uploads/plan/'.$plan->image) }}" class="card-img-top"></div>

                                        <div class="icons">
                                            <div class="left-area">
                                                <a class=" caegory-btn" href="#"><b>Plan</b></a>
                                            </div>
                                        </div>
                                        <p> {!! Str::limit(strip_tags($plan->description), 100) !!}...</p>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="planModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <!-- Add your image here -->
                                                    <p>   {!! $plan->description !!}... </p>                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <button type="button" class="caegory-btn" data-toggle="modal" data-target="#vissionModal">
                                    <div class="image-wrapper">
                                        <img src="{{asset('assets/uploads/vision/'.$vision->image) }}" class="card-img-top"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class=" caegory-btn" href="#"><b>Vision</b></a>
                                        </div>
                                    </div>
                                    <p> {!! Str::limit(strip_tags($vision->description), 100) !!} ...</p>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="vissionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <!-- Add your image here -->
                                                    <p>   {!! $vision->description !!}... </p>                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <a class="btn btn-bg mb-4 mx-auto" target="_blank" href="{{route('front.about')}}"><b>View MORE</b></a>
                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Services</h2>

                            </div>
                            @foreach ($services as $i => $service)
                                <div class="col-md-6 border " >
                                    <div class="single-post " >
                                        <button type="button" class="caegory-btn" data-toggle="modal" data-target="#serviceModal-{{$i}}">
                                            <div class="image-wrapper"><img src="{{ asset('assets/uploads/service/'.$service->image)}}" alt="Blog Image"></div>

                                            <div class="icons">
                                                <div class="text-center">
                                                    <a class=" caegory-btn " href=""><b>{!!$service->title!!}</b></a>
                                                </div>
                                            </div>

                                            <p>   {!! Str::limit(strip_tags($service->description), 100) !!}... </p>

                                            <!-- Modal -->
                                            <div class="modal fade" id="serviceModal-{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <!-- Add your image here -->
                                                            <p>   {!! $service->description !!}... </p>                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                    </div><!-- single-post -->
                                </div><!-- col-sm-6 -->
                            @endforeach

                            <a class="btn btn-bg mb-4 mx-auto" href="#"><b>View MORE</b></a>
                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Expertises</h2>

                            </div>
                            @foreach ($expertises as $i => $expertise)
                                <div class="col-lg-4 col-md-4  ">
                                    <button type="button" class="caegory-btn" data-toggle="modal" data-target="#serviceModal-{{$i}}">
                                        <div class="single-post  border border-1">
                                            <div class="image-wrapper"><img src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" alt="Blog Image"></div>

                                            <div class="icons">
                                                <div class="left-area">
                                                    <a class=" caegory-btn" href="#"><b> {!!$expertise->title!!}</b></a>
                                                </div>
                                            </div>

                                            {{--                                    <h3 class="title"><a href="#"><b class="light-color">How to paint the wall and street</b></a></h3>--}}
                                            <p> {!! Str::limit(strip_tags($expertise->description), 100) !!} ...</p>

                                        </div><!-- single-post -->
                                    </button>

                                </div><!-- col-sm-6 -->

                            @endforeach
                            <a class="btn btn-bg mb-4 mx-auto" href="#"><b>View MORE</b></a>
                        </div><!-- row -->

                        <div class="row ">
                            <div class="section-title col-md-12">
                                <h2>Gallery</h2>
                            </div>
                            @foreach($galleries as $index => $gallery)
                                <div class="col-lg-4 col-md-6">
                                    <!-- Add a button to trigger the modal -->
                                    <div class="single-post">
                                        <div class="image-wrapper">
                                            <button type="button" class="btn btn-primary p-0" data-toggle="modal" data-target="#galleryModal-{{$index}}">
                                                <img src="{{asset('assets/uploads/gallery/'.$gallery->image)}}" alt="Blog Image"> <br>
                                            </button>
                                        </div>

                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="galleryModal-{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <!-- Add your image here -->
                                                    <img src="{{asset('assets/uploads/gallery/'.$gallery->image)}}" class="img-fluid" alt="your-image-description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a class="btn btn-bg mb-4 mx-auto" href="{{route('front.gallery')}}"><b>View MORE</b></a>
                        </div><!-- row -->


{{--                        <div class="row">--}}
{{--                            <div class="section-title col-md-12">--}}
{{--                                <h2>Portfolio</h2>--}}

{{--                            </div>--}}
{{--                            @foreach($portfolios as $index => $portfolio)--}}
{{--                                <div class="col-lg-4 col-md-6">--}}
{{--                                    <!-- Add a button to trigger the modal -->--}}
{{--                                    <div class="single-post">--}}
{{--                                        <div class="image-wrapper">--}}

{{--                                            <button type="button" class="btn btn-primary p-0" data-toggle="modal" data-target="#portfolioModal-{{$index}}">--}}
{{--                                                <img src="{{asset('assets/uploads/portfolio/'.$portfolio->image)}}" alt="Blog Image">--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <!-- Modal -->--}}
{{--                                    <div class="modal fade" id="portfolioModal-{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                                            <div class="modal-content">--}}
{{--                                                <div class="modal-body">--}}
{{--                                                    <!-- Add your image here -->--}}
{{--                                                    <img src="{{asset('assets/uploads/portfolio/'.$portfolio->image)}}" class="img-fluid" alt="your-image-description">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                            <a class="btn btn-bg mb-4 mx-auto" href="#"><b>View MORE</b></a>--}}
{{--                        </div><!-- row -->--}}

                        <!-- ======= Clients Section ======= -->
                        <section id="organization" class="clients">
                            <div class="container" data-aos="zoom-in">
                                <div class="section-title">
                                    <h2>Associate Organizations</h2>
                                </div>
                                <div class="row">

                                    @foreach($organizations as $organization)
                                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('assets/uploads/organization/'.$organization->image)}}" class="img-fluid" alt="">
                                        </div>
                                    @endforeach


                                </div>

                            </div>
                        </section><!-- End Clients Section -->

{{--                        <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a>--}}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="blog-posts">
                                    <div class="row">
                                        <div class="section-title col-md-12 text-center">
                                            <h2>Our CEO</h2>
                                        </div>
                                        <div class="col-md-3 mx-auto">
                                            <div class="single-post">
                                                <button type="button" class="caegory-btn" data-toggle="modal" data-target="#ceoModal">
                                                    <div class="image-wrapper"><img src="{{asset('assets/uploads/ceo/'. $ceo->image)}}" alt="Blog Image"></div>

                                                    <div class="icons">
                                                        <div class="left-area">
                                                            <a class=" caegory-btn" href="#"><b>{{$ceo->name}}</b></a>
                                                        </div>
                                                    </div>
                                                    <div style="font-style: italic !important;">
                                                        <p >{!! $ceo->designation !!}</p>
                                                    </div>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="ceoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <!-- Add your image here -->
                                                                <img src="{{asset('assets/uploads/ceo/'. $ceo->image)}}" alt="Blog Image">
                                                                <p>   {!! $ceo->message !!} </p>                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- single-post -->
                                            {{--                                        <a class=" read-more-btn" href="#"><b> MORE</b></a>--}}
                                        </div><!-- single-post -->
                                    </div><!-- col-sm-6 -->
                                </div><!-- row -->
                        <div class="row pt-4">
                            <div class="section-title col-md-12">
                                <h2>Trainings</h2>
                            </div>
                            @foreach ($trainings as $i => $training)
                                <div class="col-lg-4 col-md-4">

                                    <div class="single-post">
                                        <button type="button" class="caegory-btn" data-toggle="modal" data-target="#serviceModal-{{$i}}">
                                        <div class="image-wrapper"><img src="{{ asset('assets/uploads/training/'.$training->image)}}" alt="Blog Image"></div>

                                        <div class="icons">
                                            <div class="left-area">
                                                <a class=" caegory-btn" href="#"><b> {!!$training->title!!}</b></a>
                                            </div>

                                        </div>

                                        {{--                                    <h3 class="title"><a href="#"><b class="light-color">How to paint the wall and street</b></a></h3>--}}
                                        <p> {!! Str::limit(strip_tags($training->description), 100) !!} ...</p>
                                            <!-- Modal -->
                                            <div class="modal fade" id="serviceModal-{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <!-- Add your image here -->
                                                            <p>   {!! $training->description !!}... </p>                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                        </button>
                                    </div><!-- single-post -->

                                </div><!-- col-sm-6 -->
                            @endforeach


                        </div><!-- row -->


                        </div><!-- blog-posts -->
                    </div>
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section -->



    @push('scripts')
    @endpush
@endsection
