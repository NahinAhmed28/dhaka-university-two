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
                                    <h2>Our Advisors</h2>

                                </div>

                                @foreach ($advisors as  $i =>$advisor)
                                    <div class="col-md-3">
                                        <div class="single-post">
                                            <button type="button" class="caegory-btn" data-toggle="modal" data-target="#advisorModal-{{$i}}">

                                                <div class="image-wrapper"><img src="{{asset('assets/uploads/advisor/'. $advisor->image)}}" alt="Blog Image"></div>

                                                <div class="icons">
                                                    <div class="left-area">
                                                        <a class="caegory-btn" href="#"><b>{{$advisor->name}}</b></a>
                                                    </div>
                                                </div>
                                                <div style=" font-style: italic !important;">

                                                    <p>{!! $advisor->designation !!}</p>
                                                </div>
                                            </button>
                                            <div class="modal fade" id="advisorModal-{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <!-- Add your image here -->
                                                            <img class=h-50" src="{{asset('assets/uploads/advisor/'. $advisor->image)}}" alt="Blog Image">
                                                            <p>   {!! $advisor->message !!} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
