         <!-- flex-min-height-box start -->
            <section id="down" class="dark-bg-1 flex-min-height-box" style="background-image:url({{Request::root()}}/front/assets/images/bg_shape-2.jpg);">
                <!-- flex-min-height-inner start -->
                <div class="flex-min-height-inner">
                    <!-- container start -->
                    <div class="container small top-bottom-padding-120">
                        <!-- flex-container start -->
                        <div data-animation-container class="flex-container">
                            <!-- column start -->
                            <div class="twelve-columns text-center">
                                <h2 class="large-title text-height-12">
                                    <span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="{{ $component['Index']->Component1}} ">{{ $component['Index']->Component1}} </span><br>
                                    <span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="{{ $component['Index']->Component2}}">{{ $component['Index']->Component2}}</span>
                                </h2>
                            </div><!-- column end -->
                            <!-- column start -->
                            <div class="twelve-columns text-center">
                                <p data-animation-child class="p-letter-style text-color-4 text-height-13 fade-anim-box tr-delay04" data-animation="fade-anim">{{ $component['Index']->Component3}}
                                </p><div data-animation-child="" class="arrow-btn-box top-margin-30 fade-anim-box tr-delay05 animated fade-anim" data-animation="fade-anim">
                                    <a href="/about" class="arrow-btn pointer-large animsition-link">{{lang_word_ar(14)}}</a>
                                </div>
                            </div><!-- column end -->
                        </div><!-- flex-container end -->
                    </div><!-- container end -->
                </div><!-- flex-min-height-inner end -->
            </section>
            <!-- flex-min-height-box end -->