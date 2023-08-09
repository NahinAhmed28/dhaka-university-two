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
