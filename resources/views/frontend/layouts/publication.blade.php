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
                                <h2>Publications</h2>
                            </div>
                            @foreach ($publications as $publication)
                                <div class="col-md-12 border" style="border-bottom:1px solid #0ba360!important;padding: 2% " >
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="card-title ">{{$loop->iteration }} . {!!$publication->title!!}</h5>
                                            <p class="card-text">{!!$publication->description!!}</p>
                                        </div>
                                    </div>
                                </div><!-- row -->
                            @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
