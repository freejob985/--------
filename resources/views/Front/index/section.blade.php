<!-- section start -->
            <section class="light-bg-1 bottom-padding-30 top-padding-120" data-midnight="black">
                <!-- container start -->
        
                <div data-animation-container class="container small bottom-padding-60 text-center">
                    <h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2" data-animation="overlay-anim2">{{lang_word_ar(16)}}</h2><br>
                    <p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5" data-animation="fade-anim">{{lang_word_ar(19)}}</p>
                </div><!-- container end -->
                @if (count($recent[0])>0)
                @foreach ($recent[0] as $item_recent)
                <!-- bottom-padding-90 start -->
                <div class="bottom-padding-90">
                    <!-- portfolio-content start -->
                    <div class="portfolio-content flex-min-height-box">
                        <!-- portfolio-content-inner start -->
                        <div class="portfolio-content-inner flex-min-height-inner">
                            <!-- flex-container start -->
                            <div class="flex-container container small">
                                <!-- column start -->
                                <div data-animation-container class="six-columns">
                                    <div class="content-right-margin-40">
                                        <span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">{{ $item_recent['Section']}}</span>
                                        <h3 class="title-style text-color-1">
                                            <span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $item_recent['Name']}} </span><br>
                                          
                                        </h3>
                                        <p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">
                                            {{ $item_recent['Explanation']}}</p>																				
                                        <div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
                                            <a href="/" class="arrow-btn pointer-large animsition-link">{{lang_word_ar(14)}}</a>
                                        </div>
                                    </div>
                                </div><!-- column end -->
                                <!-- column start -->
                                <div class="six-columns top-padding-60">
                                    <a href="/" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
                                        <div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{Request::root()}}/front/assets/images/projects/{{ $item_recent['Image']}})"></div>
                                    </a>
                                </div><!-- column end -->
                            </div><!-- flex-container end -->
                        </div><!-- portfolio-content-inner end -->
                    </div><!-- portfolio-content end -->
                </div>
                <!-- bottom-padding-90 end -->
                @endforeach
                @endif


                @if (count($recent[1])>0)
                @foreach ($recent[1] as $item_recent)
                <!-- bottom-padding-90 start -->
                <div class="bottom-padding-90">
                    <!-- portfolio-content start -->
                    <div class="portfolio-content flex-min-height-box">
                        <!-- portfolio-content-inner start -->
                        <div class="portfolio-content-inner flex-min-height-inner">
                            <!-- flex-container start -->
                            <div class="flex-container reverse container small">
                                <!-- column start -->
                                <div class="six-columns top-padding-60">
                                    <a href="/" class="portfolio-content-bg-box pointer-large hover-box hidden-box animsition-link">
                                        <div class="portfolio-content-bg hover-img overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2" style="background-image:url({{Request::root()}}/front/assets/images/projects/{{ $item_recent['Image']}})"></div>
                                    </a>
                                </div><!-- column end -->
                                <!-- column start -->
                                <div data-animation-container class="six-columns">
                                    <div class="content-left-margin-40">
                                        <span class="small-title-oswald red-color overlay-anim-box2" data-animation="overlay-anim2">     {{ $item_recent['Section']}}</span>
                                        <h3 class="title-style text-color-1">
                                                                                      <span data-animation-child class="overlay-anim-box2 overlay-dark-bg-2 tr-delay01" data-animation="overlay-anim2">{{ $item_recent['Name']}} </span><br>

                                        </h3>
                                        <p data-animation-child class="p-style-small text-color-2 fade-anim-box tr-delay04" data-animation="fade-anim">
                                            {{ $item_recent['Explanation']}}
                                          </p>																				
                                        <div data-animation-child class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05" data-animation="fade-anim">
                                            <a href="/" class="arrow-btn pointer-large animsition-link">{{lang_word_ar(14)}}</a>
                                        </div>
                                    </div>
                                </div><!-- column end -->
                            </div><!-- flex-container end -->
                        </div><!-- portfolio-content-inner end -->
                    </div><!-- portfolio-content end -->
                </div><!-- bottom-padding-90 end -->
                @endforeach
                @endif           
      