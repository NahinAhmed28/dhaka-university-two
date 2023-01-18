<!DOCTYPE html>

<html lang="">
@include('frontend.layouts.common.head')
<body id="top">


@include('frontend.layouts.common.header1')
@include('frontend.layouts.common.header2')



@yield('content')


@include('frontend.layouts.common.footer1')
@include('frontend.layouts.common.footer2')

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{asset('frontend/layout/scripts/jquery.min.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.mobilemenu.js')}}"></script>
</body>
</html>
