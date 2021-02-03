@extends('Front.layouts.main')
@section('Main')
<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
    @include('Front.services.height')
    {{-- ############################################################# --}}

    {{-- ############################################################# --}}

    {{-- ############################################################# --}}
    @include('Front.services.SERVICES')
    {{-- ############################################################# --}}
    @include('Front.index.container');
</main>
<!-- animsition-overlay end -->
@endsection