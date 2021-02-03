@extends('Front.layouts.main')
@section('Main')

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    <!-- page-head start -->
    <section id="up" class="page-head flex-min-height-box dark-bg-1">
        <!-- page-head-bg -->
        <div class="page-head-bg overlay-loading2"
            style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/{{ $component['contact']->Component1}});"></div>
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- flex-container start -->
            <div class="container top-bottom-padding-120 flex-container response-999">
                <!-- column start -->
                <div class="six-columns six-offset">
                    <div class="content-left-margin-40">
                        <h2 class="large-title-bold">
                            <span class="load-title-fill tr-delay03" data-text="{{ $component['contact']->Component2}}">{{ $component['contact']->Component2}}</span><br>
                            <span class="load-title-fill tr-delay04" data-text="{{ $component['contact']->Component3}}">{{ $component['contact']->Component3}}</span><br>
                            <span class="load-title-fill tr-delay05" data-text="{{ $component['contact']->Component4}}">{{ $component['contact']->Component4}}</span>
                        </h2>
                        <p class="p-style-bold-up text-height-20 d-flex-wrap">
                            <span class="load-title-fill tr-delay08" data-text="{{ $component['contact']->Component5}}">{{ $component['contact']->Component5}}</span>
                            <span class="load-title-fill tr-delay09" data-text="{{ $component['contact']->Component6}}">{{ $component['contact']->Component6}}</span>
                            <span class="load-title-fill tr-delay10" data-text="{{ $component['contact']->Component7}}">{{ $component['contact']->Component7}}</span>
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
    </section><!-- page-head end -->
    <!-- flex-min-height-box start -->
    <section id="down" class="dark-bg-1 flex-min-height-box">
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- container start -->
            <div class="container top-padding-120 bottom-padding-60">
                <div data-animation-container>
                    <h2 class="large-title text-center">
                        <span data-animation-child class="title-fill" data-animation="title-fill-anim"
                            data-text="{{ $component['contact']->Component8}}">{{ $component['contact']->Component8}}</span>
                    </h2>
                    <p data-animation-child class="p-style-small text-color-5 fade-anim-box tr-delay03"
                        data-animation="fade-anim">{{ $component['contact']->Component9}}</p>
                </div>
                <!-- flex-container start -->
                <div class="flex-container top-padding-90 contact-box">
                    <!-- column start -->
                    <div class="four-columns bottom-padding-60">
                        <div data-animation-container class="content-right-margin-20">
                            <p data-animation-child class="small-title-oswald red-color overlay-anim-box2"
                                data-animation="overlay-anim2">{{ $component['contact']->Component10}}</p>
                            <p class="title-style text-color-4">
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component11}}</span><br>
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component12}}</span><br>
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component13}}</span>
                            </p>
                            <h6 data-animation-child class="flip-btn-box fade-anim-box tr-delay04"
                                data-animation="fade-anim">
                                <a href="#" class="flip-btn pointer-large"
                                    data-text="email@xen_agency.com">{{ $component['contact']->Component14}}
                                    <h6 data-animation-child class="flip-btn-box fade-anim-box tr-delay04"
                                        data-animation="fade-anim">
                                        <a href="#" class="flip-btn pointer-large"
                                            data-text="email@xen_job.com">{{ $component['contact']->Component15}}</a>
                                    </h6>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns bottom-padding-60">
                        <div data-animation-container class="content-left-right-margin-10">
                            <p data-animation-child class="small-title-oswald red-color overlay-anim-box2"
                                data-animation="overlay-anim2">{{ $component['contact']->Component16}}</p>
                            <h6 class="title-style text-color-4">
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component17}}</span><br>
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component18}}</span><br>
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component19}}</span></h6>
                            <div data-animation-child class="flip-btn-box fade-anim-box tr-delay04"
                                data-animation="fade-anim">
                                <a href="#" class="flip-btn pointer-large" data-text="open in google maps">{{ $component['contact']->Component20}}</a>
                            </div>
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns bottom-padding-60">
                        <div data-animation-container class="content-left-margin-20">
                            <p data-animation-child class="small-title-oswald red-color overlay-anim-box2"
                                data-animation="overlay-anim2">{{ $component['contact']->Component21}}</p>
                            <p class="title-style text-color-4">
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay01"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component22}}</span><br>
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay02"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component23}}</span><br>
                                <span data-animation-child class="overlay-anim-box2 overlay-light-bg-1 tr-delay03"
                                    data-animation="overlay-anim2">{{ $component['contact']->Component24}}</span>
                            </p>
                            <h6 data-animation-child class="flip-btn-box fade-anim-box tr-delay04"
                                data-animation="fade-anim">
                                <a href="#" class="flip-btn pointer-large" data-text="{{ $component['contact']->Component25}}">{{ $component['contact']->Component25}}</a>
                            </h6>
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- container end -->
        </div><!-- flex-min-height-inner end -->
    </section><!-- flex-min-height-box end -->
    <!-- contact-form-box start -->
    <section class="contact-form-box flex-min-height-box"
        style="background-image:url({{Request::root()}}/front/assets/images/backgrounds/pexels-photo-1287145.jpg)">
        <div class="bg-overlay"></div>
        <!-- flex-min-height-inner start -->
        <div class="flex-min-height-inner">
            <!-- container start -->
            <div class="container small top-bottom-padding-120">
                <h4 class="small-title-oswald text-color-4 text-center">{{lang_word_ar(8)}}</h4>
                <!-- flex-container start -->
                <form class="flex-container top-padding-90"  method="POST" action="{{ route('Contact_send') }}">
                    @csrf
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="content-right-margin-10">
                            <input type="text" placeholder="{{lang_word_ar(9)}}" name="Name" class="contact-form-control pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="content-left-right-margin-5">
                            <input type="text" placeholder="{{lang_word_ar(10)}}" name="Last"
                                class="contact-form-control pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="four-columns">
                        <div class="content-left-margin-10">
                            <input type="email" placeholder="{{lang_word_ar(11)}}" name="Mail"
                                class="contact-form-control pointer-small">
                        </div>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="twelve-columns">
                        <textarea placeholder="{{lang_word_ar(12)}}" name="message"
                            class="contact-form-control pointer-small"></textarea>
                    </div><!-- column end -->
                    <!-- column start -->
                    <div class="twelve-columns text-center top-padding-90">
                        <button class="border-btn-box pointer-large" type="submit">
                            <span class="border-btn-inner">
                                <span class="border-btn" data-text="{{lang_word_ar(13)}}">{{lang_word_ar(13)}}</span>
                            </span>
                        </button>
                    </div><!-- column end -->
                </form><!-- flex-container end -->
            </div><!-- container end -->
        </div><!-- flex-min-height-inner end -->
    </section><!-- contact-form-box end -->
</main>
<!-- animsition-overlay end -->
@endsection
