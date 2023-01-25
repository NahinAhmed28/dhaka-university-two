<header>


    <div class="middle-menu center-text"><a href="#" class="logo"><img src="{{asset('frontend/images/logo.png')}}" alt="Logo Image"></a></div>

    <div class="bottom-area">

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{route('front')}}">Home</a></li>
            <li class="drop-down"><a href="#!">Approach<i class="ion-ios-arrow-down"></i></a>
                <ul class="drop-down-menu">
                    <li><a href="{{route('front.about')}}">About Us</a></li>
                    <li><a href="{{route('front.service')}}">Our Services</a></li>
                    <li><a href="{{route('front.expertise')}}">Our Expertises</a></li>
                    <li><a href="{{route('front.mission')}}">Mission & Vision</a></li>
{{--                    <li class="drop-down"><a href="#!">CATEGORIES<i class="ion-ios-arrow-right"></i></a>--}}
{{--                        <ul class="drop-down-menu drop-down-inner">--}}
{{--                            <li><a href="#">FEATURED</a></li>--}}
{{--                            <li><a href="#">ABOUT</a></li>--}}
{{--                            <li><a href="#">CATEGORIES</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>

            </li>
{{--            <li><a href="{{asset('frontend/03-About-me.html')}}">ABOUT</a></li>--}}
            <li class="drop-down"><a href="#!">Associate<i class="ion-ios-arrow-down"></i></a>
                <ul class="drop-down-menu">
                    <li><a href="{{route('front.organization')}}">Organizations</a></li>
                    <li><a href="{{route('front.organization')}}">Expert Opinions</a></li>
                </ul>
            </li>
            <li class="drop-down"><a href="#!">Research<i class="ion-ios-arrow-down"></i></a>
                <ul class="drop-down-menu">
                    <li><a href="{{route('front.ongoing-research')}}">Ongoing Researches</a></li>
                    <li><a href="{{route('front.completed-research')}}">Completed Researches</a></li>
                    <li><a href="{{route('front.publication')}}">Our Publications</a></li>
                </ul>
            </li>
            <li class="drop-down"><a href="#!">Gallery<i class="ion-ios-arrow-down"></i></a>
                <ul class="drop-down-menu">
                    <li><a href="{{route('front.gallery')}}">Galleries</a></li>
                    <li><a href="{{route('front.portfolio')}}">Portfolios</a></li>
                </ul>
            </li>
{{--            <li><a href="{{asset('frontend/04-Contact.html')}}">CONTACT</a></li>--}}
            <li><a href="{{asset('frontend/04-Contact.html')}}">CONTACT</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
        </ul><!-- main-menu -->

    </div><!-- conatiner -->
</header>
