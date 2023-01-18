<!DOCTYPE HTML>
<html lang="en">
@include('frontend.layouts.common.head')
@stack('style')
<body>


@include('frontend.layouts.common.header')

@yield('content')

@include('frontend.layouts.common.footer')


<!-- SCIPTS -->

<script src="{{asset('frontend/common-js/jquery-3.1.1.min.js')}}"></script>

<script src="{{asset('frontend/common-js/tether.min.js')}}"></script>

<script src="{{asset('frontend/common-js/bootstrap.js')}}"></script>

<script src="{{asset('frontend/common-js/layerslider.js')}}"></script>

<script src="{{asset('frontend/common-js/scripts.js')}}"></script>


@stack('scripts')

</body>
</html>
