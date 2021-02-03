<!-- section start -->
<section class="light-bg-1" data-midnight="black">
    <!-- container start -->
    <div class="container bottom-padding-60 top-padding-120">
        <!-- text-center start -->
        <div data-animation-container class="text-center">
            <h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2"
                data-animation="overlay-anim2">{{lang_word('OUR SERVICES')}}</h2><br>
            <p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5"
                data-animation="fade-anim">{{lang_word('We Create Best Products')}}</p>
        </div><!-- text-center end -->
        <!-- flex-container start -->
        <div class="flex-container response-999 top-padding-60">
            @if (count($services)>0)
            @foreach ($services as $item_services)
            <!-- column start -->
            <div class="four-columns bottom-padding-60">
                <a data-animation-container href="#"
                    class="content-right-margin-20 hover-box pointer-large d-block light-bg-2">
                    <div data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 expertise-img-box"
                        data-animation="overlay-anim2">
                        <img class="hover-img"
                            src="{{Request::root()}}/front/assets/images/services/{{ $item_services->Image}}"
                            alt="{{ $item_services->Title}}">
                    </div>
                    <div class="expertise content-padding-l-r-20 content-padding-bottom-20">
                        <h3 data-animation-child
                            class="small-title-oswald text-color-1 hover-content fade-anim-box tr-delay01"
                            data-animation="fade-anim">{{ $item_services->Title}}</h3><br>
                        <p data-animation-child
                            class="p-style-xsmall text-color-1 hover-content fade-anim-box tr-delay02"
                            data-animation="fade-anim">{!! $item_services->Topic!!}</p>
                    </div>
                </a>
            </div>
            <!-- column end -->
            @endforeach
            @endif
        </div><!-- flex-container end -->
    </div><!-- container end -->
</section>
<!-- section end -->
