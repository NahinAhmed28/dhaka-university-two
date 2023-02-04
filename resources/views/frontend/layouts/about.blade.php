@extends('frontend.layouts.app')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush


@include('frontend.layouts.common.heroheader')
<!-- Start #main -->
<main id="main">

    <div class="single-post mx-5">
        <div class="col-md-12 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <div class="section-title">
                <h2>ABOUT US</h2>
                {{--                                    <p>Check our Gallery</p>--}}
            </div>
            <iframe style="width: 100%; min-height: 300px"  src="https://www.youtube.com/embed/{{getOwnYoutubeIdForEmbed($about->video)}}"
                    {{--                            style="height:700px;width:1280px;"--}}
                    title="YouTube video player" allowfullscreen></iframe>
            {{--                    <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">--}}
            {{--                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>--}}
        </div>

        <p class="mx-5"> {!! $about->description !!}</p>
        <p class="date"><em>Last Updated: {{$about->updated_at}}</em></p>

    </div><!-- single-post -->
    <!-- ======= About Boxes Section ======= -->
    <section class="section blog-area">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Approaches</h2>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper">
                                        <img src="{{ asset('assets/uploads/mission/'.$mission->image) }}" class="card-img-top"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class=" caegory-btn" href="#"><b>Mission</b></a>
                                        </div>
                                    </div>
                                    <p> {!! Str::limit(strip_tags($mission->description), 100) !!} ...</p>
                                    <a class="read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-">
                                <div class="single-post">
                                    <div class="image-wrapper">
                                        <img src="{{  asset('assets/uploads/plan/'.$plan->image) }}" class="card-img-top"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class=" caegory-btn" href="#"><b>Plan</b></a>
                                        </div>
                                    </div>
                                    <p> {!! Str::limit(strip_tags($plan->description), 100) !!}...</p>
                                    <a class=" read-more-btn"  href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->

                            <div class="col-lg-4 col-md-4">
                                <div class="single-post">
                                    <div class="image-wrapper">
                                        <img src="{{asset('assets/uploads/vision/'.$vision->image) }}" class="card-img-top"></div>

                                    <div class="icons">
                                        <div class="left-area">
                                            <a class=" caegory-btn" href="#"><b>Vision</b></a>
                                        </div>
                                    </div>
                                    <p> {!! Str::limit(strip_tags($vision->description), 100) !!} ...</p>
                                    <a class=" read-more-btn" href="#"><b>READ MORE</b></a>
                                </div><!-- single-post -->
                            </div><!-- col-sm-6 -->


                        </div><!-- row -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Boxes Section -->


</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
