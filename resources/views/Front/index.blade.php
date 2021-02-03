@extends('Front.layouts.main')
@section('Main')
<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    @include('Front.index.slider');
    @include('Front.index.height');
    @include('Front.index.section');
    @include('Front.index.container');
    @include('Front.services.SERVICES')
    @include('Front.index.lightx');
    @include('Front.index.news');
</main>
<!-- animsition-overlay end -->
@endsection