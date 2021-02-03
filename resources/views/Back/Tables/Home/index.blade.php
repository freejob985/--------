@extends('Back.LAYOUT.MAINE')

@section('title',"الرئسية" )
@section('content')
@push('css')
<link rel="stylesheet" href="{{ URL('Back/css/laravel_home.css')}}" />
<link rel="stylesheet" href="{{ URL('Back/css/style.css')}}" />
<link rel="stylesheet" href="{{ URL('Back/css/laravel.css')}}" />
<style>
    * {
        font-family: 'Cairo', sans-serif;
    }

    p.color-contrast-medium {
        font-size: 20px;
        text-align: -webkit-center;
    }

    h2 {
        font-family: 'Cairo', sans-serif !important;
    }
</style>
@endpush
{{--  ##########################################################################  --}}


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card-counter primary">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers">{{ DB::table('blog')->count() }}</span>
                <span class="count-name">Blog</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter danger">
                <i class="fa fa-ticket"></i>
                <span class="count-numbers">{{ DB::table('users')->count() }}</span>
                <span class="count-name">Users</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter success">
                <i class="fa fa-database"></i>
                <span class="count-numbers">{{ DB::table('customers')->count() }}</span>
                <span class="count-name">Clients</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-counter info">
                <i class="fa fa-users"></i>
                <span class="count-numbers">{{ DB::table('contact')->count() }}</span>
                <span class="count-name">Consultation</span>
            </div>
        </div>
    </div>
</div>


{{--  ##########################################################################  --}}
<section class="cd-timeline js-cd-timeline">
    <div class="container max-width-lg cd-timeline__container">
        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--picture">
                <img src="https://image.flaticon.com/icons/svg/148/148713.svg" alt="Picture">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>{{ $titel[0] }}</h2>
                <img src="{{Request::root()}}/Back/P1.jpg" class="img-responsive">
                <p class="color-contrast-medium"> {{ $Subject[0] }}</p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Jan 14</span>
                    <a href="{{ route('contact.index') }}" class="btn btn-info" role="button">الاتصال</a>
                    <a href="{{ route('opinions.index') }}" class="btn btn-info" role="button">الاراء</a>
                    <a href="{{ route('blog.index') }}" class="btn btn-info" role="button">المدونة</a>
                    <a href="{{ route('services.index') }}" class="btn btn-info" role="button">معرض الصور </a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--movie">
                <img src="{{Request::root()}}/Back/P2.jpg" alt="Movie">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>{{ $titel[1] }}</h2>
                <img src="{{Request::root()}}/Back/P2.jpg" class="img-responsive">

                <p class="color-contrast-medium">{{ $Subject[1] }}</p>

                <div class="flex justify-between items-center">
                    <a href="{{ route('contact.index') }}" class="btn btn-info" role="button">الاتصال</a>
                    <a href="{{ route('opinions.index') }}" class="btn btn-info" role="button">الاراء</a>
                    <a href="{{ route('blog.index') }}" class="btn btn-info" role="button">المدونة</a>
                    <a href="{{ route('services.index') }}" class="btn btn-info" role="button">معرض الصور </a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--picture">
                <img src="{{Request::root()}}/Back/P1.jpg" alt="Picture">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>{{ $titel[2] }}</h2>
                <img src="{{Request::root()}}/Back/P3.jpg" alt="Location">

                <p class="color-contrast-medium">{{ $Subject[2] }}</p>

                <div class="flex justify-between items-center">
                    <a href="{{ route('contact.index') }}" class="btn btn-info" role="button">الاتصال</a>
                    <a href="{{ route('opinions.index') }}" class="btn btn-info" role="button">الاراء</a>
                    <a href="{{ route('blog.index') }}" class="btn btn-info" role="button">المدونة</a>
                    <a href="{{ route('services.index') }}" class="btn btn-info" role="button">معرض الصور </a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--location">
                <img src="{{Request::root()}}/Back/P1.jpg" alt="Location">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>{{ $titel[3] }}</h2>
                <img src="{{Request::root()}}/Back/P4.jpg" alt="Location">

                <p class="color-contrast-medium">{{ $Subject[3] }}</p>

                <div class="flex justify-between items-center">
                    <a href="{{ route('contact.index') }}" class="btn btn-info" role="button">الاتصال</a>
                    <a href="{{ route('opinions.index') }}" class="btn btn-info" role="button">الاراء</a>
                    <a href="{{ route('blog.index') }}" class="btn btn-info" role="button">المدونة</a>
                    <a href="{{ route('services.index') }}" class="btn btn-info" role="button">معرض الصور </a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--location">
                <img src="{{Request::root()}}/Back/P1.jpg" alt="Location">
            </div> <!-- cd-timeline__img -->

            <div class="cd-timeline__content text-component">
                <h2>{{ $titel[4] }}</h2>
                <img src="{{Request::root()}}/Back/P5.jpg" alt="Location">
                <p class="color-contrast-medium">{{ $Subject[4] }}</p>


                <div class="flex justify-between items-center">
                    <a href="{{ route('contact.index') }}" class="btn btn-info" role="button">الاتصال</a>
                    <a href="{{ route('opinions.index') }}" class="btn btn-info" role="button">الاراء</a>
                    <a href="{{ route('blog.index') }}" class="btn btn-info" role="button">المدونة</a>
                    <a href="{{ route('services.index') }}" class="btn btn-info" role="button">معرض الصور </a>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->

        <div class="cd-timeline__block">
            <div class="cd-timeline__img cd-timeline__img--movie">
                <img src="{{Request::root()}}/Back/P1.jpg" alt="Movie">
            </div> <!-- cd-timeline__img -->
            <div class="cd-timeline__content text-component">
                <h2>Final Section</h2>
                <p class="color-contrast-medium"></p>

                <div class="flex justify-between items-center">
                    <span class="cd-timeline__date">Feb 26</span>
                </div>
            </div> <!-- cd-timeline__content -->
        </div> <!-- cd-timeline__block -->
    </div>
</section>
{{--  #######################################################  --}}
<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <i class="fa fa-briefcase"></i>
                <p id="number1" class="number">{{ DB::table('notifications')->count() }}</p>
                <span></span>
                <p>notifications</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                <i class="fa fa-smile-o"></i>
                <p id="number2" class="number">{{ DB::table('services')->count() }}</p>
                <span></span>
                <p>Services</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <i class="fa fa-coffee"></i>
                <p id="number3" class="number">{{ DB::table('contact')->count() }}</p>
                <span></span>
                <p>contact</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <i class="fa fa-camera"></i>
                <p id="number4" class="number">{{ DB::table('notifications')->count() }}</p>
                <span></span>
                <p>Contact</p>
            </div>
        </div>
    </div>
</div>
{{--  #######################################################  --}}
<h1 style="
text-align: center;
font-family: 'Cairo', sans-serif !important;
font-size: 31px;
background: #00bcd4;
padding: 2%;
color: white;
">افضل الصفحات
    <img class="img-responsive" src="https://image.flaticon.com/icons/svg/1197/1197511.svg" width="150"
        style=" margin: 0 auto;     margin-top: 2%;">
</h1>

<div class="col-md-12">
    <div class="widget blank no-padding">
        <div class="panel panel-default work-progress-table">
            <!-- Default panel contents -->
            @php
            $visits_max= DB::table('visits')->orderBy('Visits', 'desc')->get()->first();
            (int) $db=$visits_max->Visits;
            @endphp
            <!-- Table -->
            <table id="mytable" class="table">
                <tbody>
                    @foreach( DB::table('visits')->orderBy('Visits', 'desc')->get() as $item_visits)
                    <tr>
                        <td>{{ $item_visits->page}}</td>
                        <td><a href="{{ $item_visits->Link}}" class="btn btn-info" role="button">رابط الصفحة</a> </td>
                        <td><span class="label label-primary">{{ $item_visits->ip}}</td>
                        <td>
                            @php
                            @endphp

                            <div class="progress">
                                <div style="width:{{ round($item_visits->Visits / $db * 100) }}%;" aria-valuemax="100"
                                    aria-valuemin="0" aria-valuenow="{{ round($item_visits->Visits / $db * 100) }}"
                                    role="progressbar" class="red progress-bar">
                                    <span>{{ round($item_visits->Visits / $db * 100) }}%</span>
                                </div>
                            </div>
                        </td>
                        <td style="direction: initial;"><span class="{{ $item_visits->label}}">{!! time_since($item_visits->time) !!}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('js')
<script src="{{ URL('Back/main.js') }}"></script>
@endpush