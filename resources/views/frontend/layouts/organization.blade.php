@extends('frontend.layouts.app')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

<!-- ======= Hero Section ======= -->
@include('frontend.layouts.common.heroheader')
<!-- End Hero -->

<!-- Start #main -->
<main id="main">

    <!-- ======= Testimonials Section ======= -->
    <section class="section blog-area">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Our CEO</h2>

                            </div>
                                <div class="col-md-3">
                                    <div class="single-post">
                                        <div class="image-wrapper"><img src="{{asset('assets/uploads/ceo/'. $ceo->image)}}" alt="Blog Image"></div>

                                        <div class="icons">
                                            <div class="left-area">
                                                <a class=" caegory-btn" href="#"><b>{{$ceo->name}}</b></a>
                                            </div>
                                        </div>
                                        <div  style=" font-style: italic !important;">
                                            <p>{!! $ceo->designation !!}</p>
                                        </div>
                                        <a class=" read-more-btn" href="#"><b> MORE</b></a>
                                    </div><!-- single-post -->
                                </div><!-- col-sm-6 -->


                        </div><!-- row -->

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->
    <section class="section blog-area">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Our Advisors</h2>

                            </div>

                            @foreach ($advisors as $advisor)
                                <div class="col-md-3">
                                    <div class="single-post">
                                        <div class="image-wrapper"><img src="{{asset('assets/uploads/advisor/'. $advisor->image)}}" alt="Blog Image"></div>

                                        <div class="icons">
                                            <div class="left-area">
                                                <a class=" caegory-btn" href="#"><b>{{$advisor->name}}</b></a>
                                            </div>
                                        </div>
                                        <div  style=" font-style: italic !important;">
                                            <p>{!! $advisor->designation !!}</p>
                                        </div>
                                        <a class=" read-more-btn" href="#"><b> MORE</b></a>
                                    </div><!-- single-post -->
                                </div><!-- col-sm-6 -->
                            @endforeach

                        </div><!-- row -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog-area">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Our Researchers</h2>

                            </div>

                            @foreach ($members as $member)
                                <div class="col-md-3">
                                    <div class="single-post">
                                        <div class="image-wrapper"><img src="{{asset('assets/uploads/member/'. $member->image)}}" alt="Blog Image"></div>

                                        <div class="icons">
                                            <div class="left-area">
                                                <a class="caegory-btn" href="#"><b>{{$member->name}}</b></a>
                                            </div>
                                        </div>
                                        <div style=" font-style: italic !important;">
                                            <p>{!! $member->designation !!}</p>
                                        </div>
                                        <a class="read-more-btn" href="#"><b> MORE</b></a>
                                    </div><!-- single-post -->
                                </div><!-- col-sm-6 -->
                            @endforeach

                        </div><!-- row -->
                    </div>
                </div>
            </div>
        </div>
    </section>
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

</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
