<!-- section start -->
<section id="down" class="dark-bg-1 top-bottom-padding-120">
    <!-- container start -->
    <div class="container text-center">
        <h2 class="large-title title-fill" data-animation="title-fill-anim" data-text="What We Do">What We Do</h2>
    </div><!-- container end -->
    <!-- top-padding-90 start -->


    @if (count($we)>0)
    @foreach ($we as $item_we)

    <div class="top-padding-90">
        <!-- container start -->
        <div class="container">
            <div class="services-bg" style="background-image:url({{Request::root()}}/front/assets/images/services/{{ $item_we->Component1}})"></div>	
        </div><!-- container end -->
        <!-- flex-container start -->
        <div class="container small top-padding-60 flex-container response-999 services-content">
            <!-- column start -->
            <div class="four-columns">
                <div data-animation-container class="content-right-margin-20">
                    <h2 data-animation-child class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $item_we->Component2}}</h2>
                    <h3 class="title-style text-color-4">
                        <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01" data-animation="overlay-anim2">{{ $item_we->Component3}}</span><br>
                        <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02" data-animation="overlay-anim2">{{ $item_we->Component4}}</span><br>
                        <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03" data-animation="overlay-anim2">{{ $item_we->Component5}}</span>
                    </h3>
                    <ul class="list-dots">
                        <li>
                            <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04" data-animation="fade-anim">{{ $item_we->Component6}}</p>
                        </li>
                        <li>
                            <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay05" data-animation="fade-anim">{{ $item_we->Component7}}</p>
                        </li>
                        <li>
                            <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay06" data-animation="fade-anim">{{ $item_we->Component8}}</p>
                        </li>
                        <li>
                            <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay07" data-animation="fade-anim">{{ $item_we->Component9}}</p>
                        </li>
                        <li>
                            <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay08" data-animation="fade-anim">{{ $item_we->Component10}}</p>
                        </li>
                        <li>
                            <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay09" data-animation="fade-anim">{{ $item_we->Component11}}</p>
                        </li>
                    </ul>
                </div>
            </div><!-- column end -->
            <!-- column start -->
            <div class="eight-columns">
                <div class="content-left-margin-20">
                    <p class="p-style-large text-color-5 fade-anim-box tr-delay04" data-animation="fade-anim">{{ $item_we->Component12}}</p>
                </div>
            </div><!-- column end -->
        </div><!-- flex-container end -->
    </div><!-- top-padding-90 end -->
    @endforeach
    @endif
</section>
<!-- section end -->