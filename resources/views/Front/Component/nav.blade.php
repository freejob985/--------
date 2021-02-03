<!-- nav-container start -->
<nav class="nav-container dark-bg-1">
    <!-- nav-logo start -->
    <div class="nav-logo">
        <img src="{{Request::root()}}/front/assets/images/logo/logo-white.png" alt="logo">
    </div><!-- nav-logo end -->
    <!-- menu-close -->
    <div class="menu-close pointer-large"></div>
    <!-- dropdown-close-box start -->
    <div class="dropdown-close-box">
        <div class="dropdown-close pointer-large">
            <span></span>
        </div>
    </div><!-- dropdown-close-box end -->
    <!-- nav-menu start -->
    <ul class="nav-menu dark-bg-1">
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change active dropdown-open">
            <a class="pointer-large nav-link" href="{{ route('index') }}">
                <span class="nav-btn active" data-text="{{lang_word_ar(1)}}">{{lang_word_ar(1)}}</span>
            </a>
            <div class="nav-bg"
                style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/pexels-photo-1806031.jpg);">
            </div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('about') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="{{lang_word('About')}}">{{lang_word('About')}}</span>
            </a>
            <div class="nav-bg"
                style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/adolescent-adult-diversity-1034361.jpg);">
            </div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('services') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="{{lang_word('Services')}}">{{lang_word('Services')}}</span>
            </a>
            <div class="nav-bg"
                style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/bald-casual-facial-hair-1708528.jpg);">
            </div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change dropdown-open">
            <a class="pointer-large nav-link" href="{{ route('portfolio') }}">
                <span class="nav-btn" data-text="{{lang_word('Portfolio')}}"> {{lang_word('Portfolio')}}</span>
            </a>
            <div class="nav-bg"
                style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/art-artistic-artsy-1988681.jpg);">
            </div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change dropdown-open">
            <a class="pointer-large nav-link" href="{{ route('blog') }}">
                <span class="nav-btn" data-text="{{lang_word('Blog')}}"> {{lang_word('Blog')}}</span>
            </a>
            <div class="nav-bg"
                style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/beautiful-black-close-up-1689731.jpg);">
            </div>
        </li><!-- nav-box end -->
        <!-- nav-box start -->
        <li class="nav-box nav-bg-change">
            <a href="{{ route('contact') }}" class="animsition-link pointer-large nav-link">
                <span class="nav-btn" data-text="{{lang_word('Contact')}}">{{lang_word('Contact')}}</span>
            </a>
            <div class="nav-bg"
                style="background-image: url({{Request::root()}}/front/assets/images/backgrounds/double-exposure-2390185_1920.jpg);">
            </div>
        </li><!-- nav-box end -->




        @if ( Session::get('locale') =="en")
        <li class="nav-box nav-bg-change">
            <a href="{{ route('lang', ['locale'=>'ar']) }}" class="animsition-link pointer-large nav-link">
                <span style="
                font-size: 17px !important;
            " class="nav-btn" data-text="العربية">العربيه</span>
            </a>
        </li><!-- nav-box end -->
        @else
        <li class="nav-box nav-bg-change">
            <a href="{{ route('lang', ['locale'=>'en']) }}" class="animsition-link pointer-large nav-link">
                <span style="
                font-size: 17px !important;
            " class="nav-btn" data-text="English">English</span>
            </a>
        </li><!-- nav-box end -->
        @endif
    </ul><!-- nav-menu end -->
</nav>
<!-- nav-container end -->