@extends('Front.layouts.main')
@section('Main')
<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <section id="up" class="page-head flex-min-height-box dark-bg-2">
        <!-- page-head-bg -->
        <div class="page-head-bg overlay-loading2"
            style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/{{ $component['about']->Component1}});">
        </div>
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- flex-container start -->
            <div class="container top-bottom-padding-120 flex-container response-999">
                <!-- column start -->
                <div class="six-columns six-offset">
                    <div class="content-left-margin-40">
                        <h2 class="overlay-loading2 tr-delay03 medium-title red-color">
                            {{ $component['about']->Component2}}</h2>
                        <h3 class="large-title-bold text-color-4">
                            <span
                                class="overlay-loading2 overlay-light-bg-1 tr-delay04">{!! $component['about']->Component3!!}</span><br>
                            <span
                                class="overlay-loading2 overlay-light-bg-1 tr-delay05">{!! $component['about']->Component4!!}</span><br>
                            <span
                                class="overlay-loading2 overlay-light-bg-1 tr-delay06">{!! $component['about']->Component5!!}</span>
                        </h3>
                        <p class="d-flex-wrap top-margin-20 text-color-4">
                            <span
                                class="small-title-oswald text-height-20 fade-loading tr-delay07 top-margin-10">{!! $component['about']->Component6!!}</span>
                            <span
                                class="small-title-oswald text-height-20 fade-loading tr-delay08 top-margin-10">{!! $component['about']->Component7!!}</span>
                            <span
                                class="small-title-oswald text-height-20 fade-loading tr-delay09 top-margin-10">{!! $component['about']->Component8!!}</span>
                        </p>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->
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

    {{-- ############################################################# --}}


    <!-- flex-min-height-box start -->
    <section id="down" class="dark-bg-1 flex-min-height-box about-page">
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- container start -->
            <div class="container top-bottom-padding-120">
                <!-- flex-container start -->
                <div data-animation-container class="flex-container">
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="content-right-margin-20">
                            <h2 data-animation-child class="title-style title-fill" data-animation="title-fill-anim"
                                data-text="{{ $component['about']->Component9}}">{!! $component['about']->Component9!!}
                            </h2>
                        </div>
                    </div>
                    <div class="eight-columns">
                        <div class="content-left-margin-10">
                            <p data-animation-child class="p-style-large text-color-5 fade-anim-box tr-delay01"
                                data-animation="fade-anim">
                                {!! $component['about']->Component10!!}
                            </p>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns top-padding-60">
                        <div class="content-right-margin-20">
                            <h6 data-animation-child class="small-title-oswald title-fill tr-delay02"
                                data-animation="title-fill-anim" data-text="Goals">{!! $component['about']->Component11!!}
                            </h6>
                            <ul class="list-dots">
                                <li>
                                    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03"
                                        data-animation="fade-anim">{!! $component['about']->Component12!!}</p>
                                </li>
                                <li>
                                    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04"
                                        data-animation="fade-anim">{!! $component['about']->Component13!!}</p>
                                </li>
                            </ul>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns top-padding-60">
                        <div class="content-left-right-margin-10">
                            <h6 data-animation-child class="small-title-oswald title-fill tr-delay02"
                                data-animation="title-fill-anim" data-text="Vision">
                                {!! $component['about']->Component14!!} </h6>
                            <ul class="list-dots">
                                <li>
                                    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03"
                                        data-animation="fade-anim">{!! $component['about']->Component15!!}</p>
                                </li>
                                <li>
                                    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04"
                                        data-animation="fade-anim">{!! $component['about']->Component16!!}</p>
                                </li>
                            </ul>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns top-padding-60">
                        <div class="content-left-margin-20">
                            <h6 data-animation-child class="small-title-oswald title-fill tr-delay02"
                                data-animation="title-fill-anim" data-text="{{ $component['about']->Component17}}">
                                {{ $component['about']->Component17}}</h6>
                            <ul class="list-dots">
                                <li>
                                    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay03"
                                        data-animation="fade-anim">{{ $component['about']->Component18}}</p>
                                </li>
                                <li>
                                    <p data-animation-child class="p-letter-style text-color-4 fade-anim-box tr-delay04"
                                        data-animation="fade-anim">{{ $component['about']->Component19}}</p>
                                </li>
                            </ul>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- container end -->
        </div><!-- flex-min-height-inner end -->
    </section>
    <!-- flex-min-height-box end -->



    {{-- ############################################################# --}}

    <!-- section start -->
    <section class="light-bg-1 top-bottom-padding-120" data-midnight="black">
        <!-- container start -->
        <div data-animation-container class="container small bottom-padding-60">
            <div class="text-center">
                <h2 data-animation-child class="large-title text-color-1 overlay-anim-box2"
                    data-animation="overlay-anim2">{{ $component['about']->Component20}}</h2>
            </div>
            <div class="top-margin-30">
                <h3 data-animation-child class="small-title-oswald text-color-2 text-height-20 fade-anim-box tr-delay01"
                    data-animation="fade-anim">{{ $component['about']->Component21}}</h3>
                <p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay02"
                    data-animation="fade-anim">{{ $component['about']->Component22}}</p>
                <p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay03"
                    data-animation="fade-anim">{{ $component['about']->Component23}}</p>
                <p data-animation-child class="p-style-xsmall text-color-1 fade-anim-box tr-delay04"
                    data-animation="fade-anim">{{ $component['about']->Component24}}</p>
            </div>
        </div><!-- container end -->
    </section>
    <!-- section end -->

    {{-- ############################################################# --}}


    <section class="dark-bg-1 flex-min-height-box progress-container">
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- flex-container start -->
            <div class="flex-container container top-bottom-padding-120">
                <!-- column start -->
                <div class="six-columns bottom-padding-60">
                    <div class="progress-bg overlay-anim-box2 animated overlay-anim2" data-animation="overlay-anim2"
                        style="background-image:url({{Request::root()}}/front/assets/images/backgrounds/fullscreen/models-adult-casual-wear-2196688.jpg)">
                    </div>
                </div><!-- column end -->
                <!-- column start -->
                <div class="six-columns">
                    <div class="content-left-margin-40">
                        <!-- medium-title start -->
                        <h2 data-animation-container="" class="medium-title text-center animated">
                            <span data-animation-child="" class="title-fill animated title-fill-anim"
                                data-animation="title-fill-anim" data-text="Our skills">Our skills</span>
                        </h2><!-- medium-title end -->
                        <div class="top-margin-30 animated" data-animation-container="">
                            @if (count($skills)>0)
                            @foreach ($skills as $item_skills)
                            <!-- progress-box start -->
                            <div class="progress-box">
                                <div data-animation-child="" class="p-letter-style title-fill animated title-fill-anim"
                                    data-animation="title-fill-anim" data-text="{{ $item_skills->Skill}}">{{ $item_skills->Skill}}</div>
                                <div data-animation-child=""
                                    class="p-letter-style title-fill tr-delay02 progress-counter animated title-fill-anim"
                                    data-animation="title-fill-anim" data-text="{{ $item_skills->Rating}}">{{ $item_skills->Rating}}</div>
                                <div class="progress-zero" data-progress="{{ $item_skills->Rating}}">
                                    <div class="progress-full animated slide-progress" data-animation-child=""
                                        data-animation="slide-progress" style="width: {{ $item_skills->Rating}};"></div>
                                    <div class="progress-full progress-full-red animated slide-progress"
                                        data-animation-child="" data-animation="slide-progress"
                                        data-animation-delay="200ms" style="animation-delay: 200ms; width: {{ $item_skills->Rating}};"></div>
                                </div>
                            </div><!-- progress-box end -->
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div><!-- column end -->
            </div><!-- flex-container end -->
        </div><!-- flex-min-height-inner end -->
    </section>



    {{-- ############################################################# --}}


    {{-- ############################################################# --}}

</main>
<!-- animsition-overlay end -->
@endsection