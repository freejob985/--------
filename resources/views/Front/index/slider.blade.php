<!-- home-slider start -->
<section class="home-slider fullscreen-home-slider" id="up">
    <!-- swiper-wrapper start -->
    <div class="swiper-wrapper">
        <!-- swiper-slide start -->
        @if (count($slide)>0)
        @foreach ($slide as $item_slide)


        <div class="swiper-slide flex-min-height-box home-slide">
            <!-- slide-bg -->
            <div class="slide-bg" style="background-image:url({{Request::root()}}/front/assets/images/backgrounds/fullscreen/{{ $item_slide->Image}})"></div>
            <div class="bg-overlay"></div>
            <!-- home-slider-content start -->
            <div class="home-slider-content flex-min-height-inner dark-bg-1">
                <!-- container start -->
                <div class="container top-bottom-padding-120 text-center">
                    <h2 class="large-title-bold text-color-4">
                        <span class="slider-overlay2">{{ $item_slide->Subject}}</span><br>
                        <span class="slider-overlay2 slider-tr-delay01">{{ $item_slide->Title}}</span><br>
                        <span class="slider-overlay2 slider-tr-delay02">{{ $item_slide->Sub}}</span>
                    </h2>
                    <p class="p-style-bold-up text-height-20 slider-fade slider-tr-delay03 text-color-4">{{ $item_slide->Additional}}</p><br>
                    <div class="slider-fade slider-tr-delay04 top-margin-30">
                        <div class="border-btn-box pointer-large">
                            <div class="border-btn-inner">
                                <a href="https://api.whatsapp.com/send?phone=‎‪+966582062548‬&text=الخلجية الرقمية..." class="border-btn" data-text="{{lang_word_ar(27)}}">{{lang_word_ar(27)}}</a>
                            </div>
                        </div>
                    </div>
                </div><!-- container end -->
            </div><!-- home-slider-content end -->
        </div>

        @endforeach
        @endif
    </div>
    <!-- swiper-wrapper end -->
    <!-- swiper-button-next start -->
    <div class="swiper-button-next">
        <div class="slider-arrow-next-box">
            <span class="slider-arrow-next"></span>
        </div>
    </div><!-- swiper-button-next end -->
    <!-- swiper-button-prev start -->
    <div class="swiper-button-prev">
        <div class="slider-arrow-prev-box">
            <span class="slider-arrow-prev"></span>
        </div>
    </div><!-- swiper-button-prev end -->
    <!-- swiper-pagination -->
    <div class="swiper-pagination"></div>
    <!-- scroll-btn start -->
    <a href="#down" class="scroll-btn pointer-large">
        <div class="scroll-arrow-box">
            <span class="scroll-arrow"></span>
        </div>
        <div class="scroll-btn-flip-box">
            <span class="scroll-btn-flip" data-text="{{lang_word_ar(7)}}">{{lang_word_ar(7)}}</span>
        </div>
    </a><!-- scroll-btn end -->
</section>
<!-- home-slider end -->