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

        <!-- ======= Portfolio Section ======= -->
        <section class="section blog-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="blog-posts">
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

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->


    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
@endsection
