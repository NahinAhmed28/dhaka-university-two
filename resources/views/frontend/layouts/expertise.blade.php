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


    <!-- ======= Features Section ======= -->
    <section class="section blog-area">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="section-title col-md-12 ">
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




                        </div><!-- row -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->


</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
