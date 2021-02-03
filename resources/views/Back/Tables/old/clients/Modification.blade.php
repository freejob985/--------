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
        $url_bace= route('clients.index');
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

        <form action="{{ route('clients.update', ['id'=>$clients->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
           
            <div class="row">
              <label>اللغة</label>
              <select class="browser-default" name="Language">
                <option value="" disabled selected>Choose your option</option>
                <option value="English">English</option>
                <option value="Arabic">Arabic</option>
              </select>
              @if ($errors->has('Language'))
              <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Language') }}</span>
              @endif
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="Name" type="text" class="validate" name="Name" value="{{ $clients->Name}}">
                <label class="active" for="Name">الاسم</label>
                @if ($errors->has('Name'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Name') }}</span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="Function" type="text" class="validate" name="Function" value="{{ $clients->Function}}">
                <label class="active" for="Function">الوظيفة</label>
                @if ($errors->has('Function'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Function') }}</span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="comment" class="materialize-textarea" name="comment">{{ $clients->comment}}</textarea>
                <label for="comment">التعليق</label>
                @if ($errors->has('comment'))
                <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('comment') }}</span>
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
<img class="responsive-img img-thumbnail" width="95"
src="{{Request::root()}}{{ $path }}{{ $clients->Image}}">
@endsection