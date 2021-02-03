<!-- latest-news start -->
<section class="latest-news top-padding-120 bottom-padding-30 light-bg-1" data-midnight="black">
    <!-- container start -->
    <div class="container">
        <!-- text-center start -->
        <div data-animation-container class="text-center">
            <h2 data-animation-child class="large-title text-height-10 text-color-1 overlay-anim-box2"
                data-animation="overlay-anim2">{{lang_word_ar(17)}}</h2><br>
            <p data-animation-child class="fade-anim-box tr-delay02 text-color-1 xsmall-title-oswald top-margin-5"
                data-animation="fade-anim">{{lang_word_ar(18)}}</p>
        </div><!-- text-center end -->
        <!-- flex-container start -->
        <div class="flex-container response-999 top-padding-60">
            @if (count($blog)>0)
            @foreach ($blog as $item_blog)
            <!-- column start -->
            <div class="four-columns bottom-padding-90">
                <article class="content-right-margin-20 light-bg-2" data-animation-container>
                    <a href="{{ route('blog.singel', ['id'=>$item_blog->id]) }}" class="pointer-large animsition-link hover-box d-block">
                        <div class="overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2">
                            <img class="hover-img" src="{{Request::root()}}/front/assets/images/blog/{{ $item_blog->Image}}"
                                alt="blog img">
                        </div>
                        <h3 class="title-style text-color-1 top-margin-30 blog-title content-padding-l-r-20">
                         
                            <span data-animation-child
                                class="overlay-anim-box2 hover-content overlay-dark-bg-2 tr-delay01"
                                data-animation="overlay-anim2"> {{ $item_blog->Title }}<br>
                          
                         
                        </h3>
                    </a>
                    <div class="content-padding-bottom-20 content-padding-l-r-20">
                        <ul data-animation-child
                            class="blog-category top-margin-30 fade-anim-box tr-delay04 text-color-2"
                            data-animation="fade-anim">
                            <li><i class="fas fa-thumbtack text-color-3"></i></li>
                            <li class="p-letter-style pointer-small hover-color"><a href="#">{{ $item_blog->Section}}</a></li>
                        </ul>
                        <ul data-animation-child class="blog-tags top-margin-10 fade-anim-box tr-delay05 text-color-2"
                            data-animation="fade-anim">
                            <li><i class="fas fa-tags text-color-3"></i></li>
                            <li class="p-letter-style pointer-small hover-color"><a href="#">{{ $item_blog->tag}}</a></li>
                        </ul>
                        <div data-animation-child
                            class="blog-autor-date top-margin-30 fade-anim-box tr-delay06 text-color-1"
                            data-animation="fade-anim">
                            <a class="xsmall-title-oswald pointer-small hover-color" href="#">{{ $item_blog->Author}}</a>
                            <a class="xsmall-title-oswald pointer-small hover-color" href="#">{{ $item_blog->Date}}</a>
                        </div>
                    </div>
                </article>
            </div>
            <!-- column end -->
            @endforeach
            @endif
        </div><!-- flex-container end -->
    </div><!-- container end -->
</section>
<!-- latest-news end -->