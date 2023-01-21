<header>


    <div class="middle-menu center-text"><a href="#" class="logo"><img src="{{asset('frontend/images/logo.png')}}" alt="Logo Image"></a></div>

    <div class="bottom-area">

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="#">Home</a></li>
            <li class="drop-down"><a href="#!">Approach<i class="ion-ios-arrow-down"></i></a>
                <ul class="drop-down-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Expertises</a></li>
                    <li><a href="#">Mission & Vision</a></li>
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
                    <li><a href="#">Organizations</a></li>
                    <li><a href="#">Expert Opinions</a></li>
                </ul>
            </li>
            <li class="drop-down"><a href="#!">Research<i class="ion-ios-arrow-down"></i></a>
                <ul class="drop-down-menu">
                    <li><a href="#">Ongoing Researches</a></li>
                    <li><a href="#">Completed Researches</a></li>
                    <li><a href="#">Our Publications</a></li>
                </ul>
            </li>
            <li class="drop-down"><a href="#!">Gallery<i class="ion-ios-arrow-down"></i></a>
                <ul class="drop-down-menu">
                    <li><a href="#">Galleries</a></li>
                    <li><a href="#">Portfolios</a></li>
                </ul>
            </li>
            <li><a href="{{route('login')}}">Login</a></li>
{{--            <li><a href="{{asset('frontend/04-Contact.html')}}">CONTACT</a></li>--}}
            <li><a href="{{asset('frontend/04-Contact.html')}}">CONTACT</a></li>
        </ul><!-- main-menu -->

    </div><!-- conatiner -->
</header>
