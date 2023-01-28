<div class="main-slider">
    <div id="slider">
        @foreach($heros as $hero)
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
            <img src="{{asset('assets/uploads/hero/'.$hero->image)}}" class="ls-bg" alt="" />

            <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
                <a class="btn" href="#">See More</a>
                <h3 class="title"><b>Services, Expertises, Publications</b></h3>
{{--                <h6>29 October, 2017</h6>--}}
            </div>

        </div><!-- ls-slide -->
        @endforeach

    </div><!-- slider -->
</div><!-- main-slider -->

