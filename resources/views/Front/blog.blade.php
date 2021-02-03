@extends('Front.layouts.main')
@section('Main')
@push('css')
<style>
    ul.pagination {
        display: flex;
        font-size: 100%;
        font-weight: 700;
    }

    li.page-item {
        padding-left: 3%;
        font-size: 151%;
        /* background: blueviolet; */
    }

    li.page-item.active.num {
        font-size: 26px;
        color: #1c6bb1;
    }
</style>
@endpush

<main class="animsition-overlay" data-animsition-overlay="true">
    @extends('Front.blog.flex-container')
    <!-- blog start -->
    <div id="down" class="blog container bottom-padding-30 top-padding-120 light-bg-1" data-midnight="black">
        <!-- flex-container start -->
        <div class="flex-container">
            <!-- column start -->
            <div class="eight-columns latest-news">
                @if (count($blog)>0)
                @foreach ($blog as $item_blog)
                <!-- blog-entry start -->
                <article class="bottom-padding-90">
                    <div class="light-bg-2">
                        <a href="{{ route('blog.singel', ['id'=>$item_blog->id]) }}" class="pointer-large animsition-link hover-box d-block">
                            <div class="overlay-anim-box2 overlay-dark-bg-2" data-animation="overlay-anim2">
                                <img class="hover-img"
                                    src="{{Request::root()}}/front/assets/images/blog/{{ $item_blog->Image}}"
                                    alt="blog img">
                            </div>
                            <div class="content-padding-l-r-20" data-animation-container>
                                <h3 class="title-style text-color-1 top-margin-30 blog-title">
                                    <span data-animation-child class="overlay-anim-box2 hover-content overlay-dark-bg-2"
                                        data-animation="overlay-anim2">{{ $item_blog->Title}}</span><br>
                                   
                                </h3>
                                <p data-animation-child
                                    class="fade-anim-box hover-content tr-delay03 p-style-medium text-color-2"
                                    data-animation="fade-anim">{{ $item_blog->explanation}}</p>
                            </div>
                        </a>
                        <div class="content-padding-l-r-20 content-padding-bottom-20" data-animation-container>
                            <ul data-animation-child class="blog-category top-margin-30 fade-anim-box text-color-2"
                                data-animation="fade-anim">
                                <li><i class="fas fa-thumbtack text-color-3"></i></li>
                                <li class="p-letter-style pointer-small hover-color"><a
                                        href="#">{{ $item_blog->Section}}</a></li>
                            </ul>
                            <ul data-animation-child
                                class="blog-tags top-margin-10 fade-anim-box tr-delay01 text-color-2"
                                data-animation="fade-anim">
                                <li><i class="fas fa-tags text-color-3"></i></li>
                                <li class="p-letter-style pointer-small hover-color"><a
                                        href="#">{{ $item_blog->tag}}</a></li>
                            </ul>
                            <div data-animation-child
                                class="blog-autor-date top-margin-30 fade-anim-box tr-delay02 text-color-1"
                                data-animation="fade-anim">
                                <a class="xsmall-title-oswald pointer-small hover-color"
                                    href="#">{{ $item_blog->Author}}</a>
                                <a class="xsmall-title-oswald pointer-small hover-color"
                                    href="#">{{ $item_blog->Date}}</a>
                            </div>
                        </div>
                    </div>
                </article><!-- blog-entry end -->
                @endforeach
                @endif
                <!-- loading more btn start -->
                {{ $blog->links() }}

                <!-- loading more btn start -->
     
            </div><!-- column end -->
            <!-- column start -->
            <aside class="four-columns bottom-padding-90">
                <!-- sidebar start -->
                <div class="sidebar content-left-margin-40 red-bg">
                    <!-- sidebar-box start -->
                    <div class="sidebar-box">
                        <!-- form search start -->
                        <div class="top-bottom-padding-90">
                            <form class="form-search" action="{{ route('blog.serch') }}" method="POST">
                                @csrf
                                <input type="text" class="search-control pointer-small" name="Search" placeholder="Search...">
                                <button class="search-btn pointer-large" type="button"><i
                                        class="fas fa-search"></i></button>
                                        <input type="submit">
                            </form>
                        </div><!-- form search end -->
                        <!-- widget-categories start -->
                        <div class="widget-categories bottom-padding-90">
                            <h4 class="p-style-bold-up red-color">categories</h4>
                            <ul class="top-margin-30 red-color">
                                @if (count($blog_sections)>0)
                                @foreach ($blog_sections as $item_blog_sections)
                                <li>
                                    <a href="#" class="pointer-small small-title-oswald">{{ $item_blog_sections->Section}} ({{ DB::table('blog')->where('Section', $item_blog_sections->Section)->count() }})</a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div><!-- widget-categories end -->
                        <!-- recent posts start -->
                        <div class="bottom-padding-90">
                            <h4 class="p-style-bold-up red-color">recent posts</h4>
                            <!-- recent posts content start -->
                            <div class="top-margin-30">
                                @if (count($blog_res)>0)
                                @foreach ($blog_res as $item_blog)
                                <!-- recent-entry start -->
                                <div class="recent-entry">
                                    <a href="{{ route('blog.singel', ['id'=>$item_blog->id]) }}"
                                        class="recent-entry-img-box pointer-large animsition-link">
                                        <img src="{{Request::root()}}/front/assets/images/blog/{{ $item_blog->Image}}" alt="title">
                                    </a>
                                    <div class="recent-desc">
                                        <a href="{{ route('blog.singel', ['id'=>$item_blog->id]) }}"
                                            class="xsmall-title-oswald text-color-4 pointer-large animsition-link">{{ $item_blog->Title}}</a>
                                        <div class="p-style-xsmall text-color-4 text-height-10 top-margin-5">{{ $item_blog->Date}}</div>
                                    </div>
                                </div>
                                <!-- recent-entry end -->
                                @endforeach
                                @endif
                            </div><!-- recent posts content end -->
                        </div><!-- recent posts end -->
                        <!-- widget-instagram start -->
                        <div class="widget-instagram bottom-padding-90">
                            <h4 class="p-style-bold-up red-color">Instagram</h4>
                            <ul class="d-flex-wrap top-margin-30">
                                @if (count($instagram)>0)
                                @foreach ($instagram as $item_instagram)
                                <li>
                                    <div class="hover-box hidden-box">
                                        <a class="pointer-open d-block" href="#">
                                            <img class="hover-img"
                                                src="{{Request::root()}}/front/assets/images/blog/{{ $item_instagram->Image}}"
                                                alt="instagram post">
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <!-- widget-instagram end -->
                    </div><!-- sidebar-box end -->
                </div><!-- sidebar end -->
            </aside><!-- column end -->
        </div>
        <!-- flex-container end -->
    </div><!-- blog end -->
</main>
@endsection