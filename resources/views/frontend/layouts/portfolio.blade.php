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

        <section class="section blog-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="blog-posts">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
@endsection
