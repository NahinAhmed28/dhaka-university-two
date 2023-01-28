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
                                @foreach($portfolios as $portfolio)
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Add a button to trigger the modal -->
                                        <div class="single-post">
                                            <div class="image-wrapper">

                                                <button type="button" class="btn btn-primary p-0" data-toggle="modal" data-target="#portfolioModal">
                                                    <img src="{{asset('assets/uploads/portfolio/'.$portfolio->image)}}" alt="Blog Image">
                                                </button>
                                            </div>

                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <!-- Add your image here -->
                                                        <img src="{{asset('assets/uploads/portfolio/'.$portfolio->image)}}" class="img-fluid" alt="your-image-description">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
