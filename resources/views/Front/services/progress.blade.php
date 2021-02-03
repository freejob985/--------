<!-- progress-container start -->
<section class="dark-bg-1 flex-min-height-box progress-container">
    <!-- flex-min-height-inner start -->
    <div class="flex-min-height-inner">
        <!-- flex-container start -->
        <div class="flex-container container top-bottom-padding-120">
            <!-- column start -->
            <div class="six-columns bottom-padding-60">
                <div class="progress-bg overlay-anim-box2" data-animation="overlay-anim2"
                    style="background-image:url({{Request::root()}}/front/assets/images/services/{{ $component['services']->Component9}})">
                </div>
            </div><!-- column end -->
            <!-- column start -->
            <div class="six-columns">
                <div class="content-left-margin-40">
                    <!-- medium-title start -->
                    <h2 data-animation-container class="medium-title text-center">
                        <span data-animation-child class="title-fill" data-animation="title-fill-anim"
                            data-text="Our skills">{{ $component['services']->Component8}}</span>
                    </h2><!-- medium-title end -->
                    <div class="top-margin-30" data-animation-container>
                        @if (count($skills)>0)
                        @foreach ($skills as $item_skills)
                        <!-- progress-box start -->
                        <div class="progress-box">
                            <div data-animation-child="" class="p-letter-style title-fill animated title-fill-anim"
                                data-animation="title-fill-anim" data-text="{{ $item_skills->Skill}}">
                                {{ $item_skills->Skill}}</div>
                            <div data-animation-child=""
                                class="p-letter-style title-fill tr-delay02 progress-counter animated title-fill-anim"
                                data-animation="title-fill-anim" data-text="{{ $item_skills->Rating}}">
                                {{ $item_skills->Rating}}</div>
                            <div class="progress-zero" data-progress="{{ $item_skills->Rating}}">
                                <div class="progress-full animated slide-progress" data-animation-child=""
                                    data-animation="slide-progress" style="width: {{ $item_skills->Rating}};"></div>
                                <div class="progress-full progress-full-red animated slide-progress"
                                    data-animation-child="" data-animation="slide-progress" data-animation-delay="200ms"
                                    style="animation-delay: 200ms; width: {!! $item_skills->Rating!!};"></div>
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
<!-- progress-container end -->