@extends('frontend.layouts.app')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @endpush

    <!-- ======= Hero Section ======= -->
    @include('frontend.layouts.common.heroheader')
    <!-- End Hero -->
    <section class="section blog-area">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="section-title col-md-12">
                                <h2>Services</h2>
                                <p>Check our Services</p>
                            </div>
                            @foreach ($services as $service)
                                <div class="col-lg-4 col-md-4 border " >
                                    <div class="single-post p-4">
                                        <div class="image-wrapper"><img src="{{ asset('assets/uploads/service/'.$service->image)}}" alt="Blog Image"></div>

                                        <div class="icons">
                                            <div class="text-center">
                                                <a class="btn caegory-btn " href=""><b>{!!$service->title!!}</b></a>
                                            </div>
                                        </div>

                                        <p>
                                            {!! Str::limit(strip_tags($service->description), 100) !!}...
                                        </p>


                                    </div><!-- single-post -->
                                </div><!-- col-sm-6 -->
                            @endforeach


                        </div><!-- row -->


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
