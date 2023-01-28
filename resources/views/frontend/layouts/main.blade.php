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

                        <div class="single-post">
                            <div class="col-md-12 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                                <div class="section-title">
                                    <h2>ABOUT US</h2>
                                </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-6">
                                            <iframe style="width: 100%; min-height: 300px"  src="https://www.youtube.com/embed/{{getOwnYoutubeIdForEmbed($about->video)}}"
                                            title="YouTube video player" allowfullscreen></iframe>
                                        </div>

                                        <div class="col-md-6">
                                            <p class="date"><em>Last Updated: {{$about->updated_at}}</em></p>
                                            <p> {!!$about->description!!}</p>
                                        </div>
                                    </div>
                            </div>
                        </div><!-- single-post -->


                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Approaches</h2>
                                <p>Check our Approaches</p>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper">
                                        <img src="{{ asset('assets/uploads/mission/'.$mission->image) }}" class="card-img-top"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b>Mission</b></a>
                                        </div>
                                    </div>
                                    <p>{!!$mission->description!!}</p>
                                    <a class="btn read-more-btn" href="{{route('front.about')}}"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper">
                                        <img src="{{  asset('assets/uploads/plan/'.$plan->image) }}" class="card-img-top"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b>Plan</b></a>
                                        </div>
                                    </div>
                                    <p>{!!$plan->description!!}</p>
                                    <a class="btn read-more-btn" href="{{route('front.about')}}"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper">
                                        <img src="{{asset('assets/uploads/vision/'.$vision->image) }}" class="card-img-top"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b>Vision</b></a>
                                        </div>
                                    </div>
                                    <p>{!!$vision->description!!}</p>
                                    <a class="btn read-more-btn" href="{{route('front.about')}}"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->


                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Services</h2>
                                <p>Check our Services</p>
                            </div>
                            @foreach ($services as $service)
                            <div class="col-lg-4 col-md-4 border " >
                                <div class="single-post p-4" >
                                    <div class="image-wrapper"><img src="{{ asset('assets/uploads/service/'.$service->image)}}" alt="Blog Image"></div>

                                    <div class="icons">
                                        <div class="text-center">
                                            <a class="btn caegory-btn " href=""><b>{!!$service->title!!}</b></a>
                                        </div>
                                    </div>
                                    <p>{!!$service->description!!}</p>

                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->
                            @endforeach


                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Expertises</h2>
                                <p>Check our Expertises</p>
                            </div>
                            @foreach ($expertises as $expertise)
                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper"><img src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" alt="Blog Image"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b> {!!$expertise->title!!}</b></a>
                                        </div>

                                    </div>

{{--                                    <h3 class="title"><a href="#"><b class="light-color">How to paint the wall and street</b></a></h3>--}}
                                    <p> {!!$expertise->description!!}</p>
                                    <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->
                            @endforeach



                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Team</h2>
                                <p>Check our Team</p>
                            </div>

                            @foreach ($members as $member)
                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper"><img src="{{asset('frontend/images/blog-3-500x400.jpg')}}" alt="Blog Image"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b>{{$member->name}}</b></a>
                                        </div>
                                    </div>
                                    <p>{{$member->designation}}</p>
                                    <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->
                            @endforeach

                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Galleies</h2>
                                <p>Check our Galleies</p>
                            </div>
                            @foreach($galleries as $gallery)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-post">
                                    <div class="image-wrapper">

                                        <img src="{{asset('frontend/images/blog-3-500x400.jpg')}}" alt="Blog Image"></div>
                                    <h4>{{$gallery->category}}</h4>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->



                            <div class="col-lg-12 col-md-12 text-center">
                                <a class="btn read-more-btn " href="#"><b>SEE MORE</b></a>
                            </div>
                            @endforeach

                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Portfolio</h2>
                                <p>Check our Portfolio</p>
                            </div>
                            @foreach($portfolios as $portfolio)
                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper"><img src="{{ asset('assets/uploads/portfolio/'.$portfolio->image)}}" alt="Blog Image"></div>

                                    <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->
                            @endforeach

                        </div><!-- row -->

                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Services</h2>
                                <p>Check our Services</p>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper"><img src="{{asset('frontend/images/blog-3-500x400.jpg')}}" alt="Blog Image"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                                        </div>
                                        <ul class="right-area social-icons">
                                            <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                            <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                                    <h3 class="title"><a href="#"><b class="light-color">How to paint the wall and street</b></a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper"><img src="{{asset('frontend/images/blog-4-500x400.jpg')}}" alt="Blog Image"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                                        </div>
                                        <ul class="right-area social-icons">
                                            <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                            <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                                    <h3 class="title"><a href="#"><b class="light-color">One more night in the local clubs</b></a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper"><img src="{{asset('frontend/images/blog-5-500x400.jpg')}}" alt="Blog Image"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                                        </div>
                                        <ul class="right-area social-icons">
                                            <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                            <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                                    <h3 class="title"><a href="#"><b class="light-color">A new festival in your town</b></a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->


                        </div><!-- row -->

{{--                        <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a>--}}

                        </div><!-- blog-posts -->
                    </div>
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section -->



    @push('scripts')
    @endpush
@endsection
