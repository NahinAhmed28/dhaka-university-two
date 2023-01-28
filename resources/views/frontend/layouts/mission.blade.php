@extends('frontend.layouts.app')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

<!-- ======= Hero Section ======= -->
@include('frontend.layouts.common.heroheader')
<!-- End Hero -->
{{--<div class="custom" style="position: relative; height: 2vh;">--}}
{{--</div>--}}
<section class="section blog-area">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="blog-posts">
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
                            <a class="btn caegory-btn" href="#"><b>Plan</b></a>
                        </div>
                    </div>
                    <p>{!!$mission->description!!}</p>

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

                </div><!-- single-post -->
            </div><!-- col-sm-6 -->


        </div><!-- row -->
                </div>
            </div>
        </div>
    </div>
</section>




@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
