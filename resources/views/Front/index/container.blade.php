            <!-- section start -->
            <section class="dark-bg-2">
                <!-- container start -->
                <div class="container small top-bottom-padding-120">
                    <!-- medium-title start -->
                    <h2 data-animation-container class="medium-title">
                        <span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="{{lang_word_ar(20)}}">{{lang_word_ar(20)}}</span><br>
                        <span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="{{lang_word_ar(21)}}">{{lang_word_ar(21)}}</span><br>
                        <span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="{{lang_word_ar(22)}}">{{lang_word_ar(22)}}</span>
                    </h2><!-- medium-title end -->
                    <!-- client-list start -->
                    <ul class="client-list d-flex-wrap top-padding-60">
                        @if (count($customers)>0)
                        @foreach ($customers as $item_customers)
                        <li>
                            <a href="#" class="pointer-large d-block">
                                <div class="brand-box">
                                    <img src="{{Request::root()}}/front/assets/images/clients/{{ $item_customers->Image}}" alt="Brand" class="hover-opac-img">
                                    <img src="{{Request::root()}}/front/assets/images/clients/{{ $item_customers->Extension}}" alt="Brand" class="opac-img">
                                </div>
                            </a>
                        </li>
                        @endforeach
                        @endif
                        <li class="empty-spot-box">
                            <a data-animation-container href="#" class="pointer-large p-style-bold-up empty-spot d-block">
                                <span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="{{lang_word_ar(23)}}">{{lang_word_ar(23)}}</span>
                                <span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="{{lang_word_ar(24)}}">{{lang_word_ar(24)}}</span>
                                <span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="{{lang_word_ar(25)}}">{{lang_word_ar(25)}}</span>
                            </a>
                        </li>
                    </ul><!-- client-list end -->
                </div><!-- container end -->
            </section>
            <!-- section end -->