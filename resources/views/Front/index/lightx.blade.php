<!-- light-bg-2 end -->
<section id="down"
    class="dark-bg-2 top-bottom-padding-120 _mPS2id-t mPS2id-target mPS2id-target-first mPS2id-target-last">
    <!-- container start -->
    <div class="container">
        <div class="text-center">
            <h2 class="large-title text-height-10 title-fill animated title-fill-anim" data-animation="title-fill-anim"
                data-text="{{lang_word_ar(31)}}">{{lang_word_ar(31)}}</h2><br>
        </div>
        <!-- filter-buttons start -->
        <div class="filter-buttons top-padding-90">

            <button class="filter-button-box pointer-small active" data-filter="*">
                <span class="filter-button-flip" data-text="{{lang_word_ar(15)}}">{{lang_word_ar(15)}}</span>
            </button>
            @if (count($section_work)>0)
            @foreach ($section_work as $item_section_work)
            <button class="filter-button-box pointer-small" data-filter=".{{ $item_section_work->Section}}">
                <span class="filter-button-flip" data-text="{{ $item_section_work->Section}}">{{ $item_section_work->Section}}</span>
            </button>
            @endforeach
            @endif
        </div>
        <!-- filter-buttons end -->
        <!-- works start -->
        <div class="works" style="position: relative; height: 1450.09px;">
            @if (count($works)>0)
            @foreach ($works as $item_works)
            <a href="#" class="animsition-link grid-item {{ $item_works->Section}}" style="position: absolute; left: 66.6593%; top: 899.9px;">
                <div class="work_item pointer-large hover-box hidden-box">
                    <img class="hover-img" src="{{Request::root()}}/front/assets/images/projects/{{ $item_works->Image}}" alt="">
                    <div class="works-content">
                        <span class="small-title-oswald red-color work-title-overlay">{{ $item_works->Section}}</span>
                        <h3 class="title-style text-color-4">
                            <span class="work-title-overlay work-title-delay01">{{ $item_works->Title}}</span><br>
                        </h3>
                    </div>
                </div>
            </a>
            @endforeach
            @endif
        
          
        </div><!-- works end -->
    </div><!-- container end -->
    <div class="text-center top-bottom-padding-120 red-bg" data-midnight="black">	
        <a href="#" class="pointer-large overlay-btn-box">
          
        </a>
    </div>
</section>