@extends('Back.LAYOUT.Add')
@section('title', 'اضافة موضوع جديد')
@section('content')
<div class="container-fluid" style="
text-align: center;
font-size: 161%;
background: #011a25;
width: 100%;
padding: 4%;
color: white;
">
    نموذج بيانات لجدول قاعدة بيانات
    <img src="https://image.flaticon.com/icons/svg/1455/1455095.svg" width="100">
    <br>
    <br>
    <div class="container">
        @php
        $url_bace= route('social.index');
        @endphp
        @include('Back.Source.link')
    </div>
</div>
<br>
<div class="container-fluid" style="height: 100%">
    <div class="container">
        <br>
        <br>
        <br>
        <br>

        <form action="{{ route('social.update', ['id'=>$social->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <div class="row">
              <div class="input-field col s6">
                <input id="name" type="text" class="validate" name="name" value="{{ $social->name}}">
                <label class="active" for="name">العنوان</label>
                @if ($errors->has('name'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('name') }}</span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="link" type="text" class="validate" name="link" value="{{ $social->link}}">
                <label class="active" for="link">الرابط</label>
                @if ($errors->has('link'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('link') }}</span>
                @endif
              </div>
            </div>
            <input type="submit" style="background: #011a25;" class="btn btn-primary btn-large btn-block"
                value="تعديل البيانات" />
            <div class="col-md-9">
            </div>
        </form>

        @if(session()->has('alert-success'))
        <div class="alert alert-success" style="width: 98%;">
            {{ session()->get('alert-success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div id="targetLayer"></div>
    </div>
</div>

@endsection