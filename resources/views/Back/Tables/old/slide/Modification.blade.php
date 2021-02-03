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
        $url_bace= route('slide.index');
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

        <form action="{{ route('slide.update', ['id'=>$slide->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
           
            <div class="row">
              <label>اللغة</label>
              <select class="browser-default" name="language">
                <option value="" disabled selected>Choose your option</option>
                <option value="English">English</option>
                <option value="Arabic">Arabic</option>
              </select>
              @if ($errors->has('language'))
              <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('language') }}</span>
              @endif
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="address" type="text" class="validate" name="address" value="{{ $slide->address}}">
                <label class="active" for="address">العنوان</label>
                @if ($errors->has('address'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('address') }}</span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="Sub" type="text" class="validate" name="Sub" value="{{ $slide->Sub}}">
                <label class="active" for="Sub">العنوان الفرعي</label>
                @if ($errors->has('Sub'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Sub') }}</span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="Additional" type="text" class="validate" name="Additional" value="{{ $slide->Additional}}">
                <label class="active" for="Additional">العنوان الاضافي </label>
                @if ($errors->has('Additional'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Additional') }}</span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="YouTube" type="text" class="validate" name="YouTube" value="{{ $slide->YouTube}}">
                <label class="active" for="YouTube">رابط الفديو</label>
                @if ($errors->has('YouTube'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('YouTube') }}</span>
                @endif
              </div>
            </div>
    
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" name="Image" value="{{Request::old('Image')}}">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
              @if ($errors->has('Image'))
              <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Image') }}</span>
              @endif
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
<img class="responsive-img img-thumbnail" width="150"
src="{{Request::root()}}{{ $path }}{{ $slide->img}}">
@endsection