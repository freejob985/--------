<!-- page-head start -->
<section id="up" class="page-head flex-min-height-box dark-bg-1">
    <!-- page-head-bg -->
    <div class="page-head-bg overlay-loading2"
        style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/{{ $component['blog']->Component1}});"></div>
    <!-- flex-min-height-inner start -->
    <div class="flex-min-height-inner">
        <!-- flex-container start -->
        <div class="container top-bottom-padding-120 flex-container response-999">
            <!-- column start -->
            <div class="six-columns six-offset">
                <div class="content-left-margin-40">
                    <h2 class="large-title-bold">
                        <span class="load-title-fill tr-delay03" data-text="{{ $component['blog']->Component2}}">{{ $component['blog']->Component2}}</span><br>
                        <span class="load-title-fill tr-delay04" data-text="{{ $component['blog']->Component3}}">{{ $component['blog']->Component3}}</span><br>
                        <span class="load-title-fill tr-delay05" data-text="{{ $component['blog']->Component4}}">{{ $component['blog']->Component4}}</span>
                    </h2>
                    <p class="p-style-bold-up text-height-20 d-flex-wrap">
                        <span class="load-title-fill tr-delay08" data-text="{{ $component['blog']->Component5}}">{{ $component['blog']->Component5}}</span>
                        <span class="load-title-fill tr-delay09" data-text="{{ $component['blog']->Component6}}">{{ $component['blog']->Component6}}</span>
                        <span class="load-title-fill tr-delay10" data-text="{{ $component['blog']->Component7}}">{{ $component['blog']->Component7}}</span>
                    </p>
                </div>
            </div><!-- column end -->
        </div>
        <!-- flex-container end -->
    </div><!-- flex-min-height-inner end -->
    <!-- scroll-btn start -->
    <a href="#down" class="scroll-btn pointer-large">
        <div class="scroll-arrow-box">
            <span class="scroll-arrow"></span>
        </div>
        <div class="scroll-btn-flip-box">
            <span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
        </div>
    </a><!-- scroll-btn end -->
</section>
<!-- page-head end -->