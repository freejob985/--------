@extends('Back.LAYOUT.Add')
@section('title', 'اضافة موضوع جديد')
@section('content')
<div class="container-fluid" style="text-align: center;font-size: 161%;background: #011a25;width: 100%;padding: 4%;color: white;">
  نموذج بيانات لجدول قاعدة بيانات
  <img src="https://image.flaticon.com/icons/svg/1455/1455095.svg" width="100">
  <br>
  <br>
  <div class="container">
      @php
      $url_bace="/admin/we/";
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
    <form action="{{route('we.store')}}" method="POST" enctype="multipart/form-data">
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
        <div class="input-field col s12">
          <textarea id="Component2" class="materialize-textarea" name="Component2">{{Request::old('Component2')}}</textarea>
          <label for="Component2">Component2</label>
          @if ($errors->has('Component2'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component2') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component3" class="materialize-textarea" name="Component3">{{Request::old('Component3')}}</textarea>
          <label for="Component3">Component3</label>
          @if ($errors->has('Component3'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component3') }}</span>
          @endif
        </div>
      </div>





      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component4" class="materialize-textarea" name="Component4">{{Request::old('Component4')}}</textarea>
          <label for="Component4">Component4</label>
          @if ($errors->has('Component4'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component4') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component5" class="materialize-textarea" name="Component5">{{Request::old('Component5')}}</textarea>
          <label for="Component5">Component5</label>
          @if ($errors->has('Component5'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component5') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component6" class="materialize-textarea" name="Component6">{{Request::old('Component6')}}</textarea>
          <label for="Component6">Component6</label>
          @if ($errors->has('Component6'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component6') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component7" class="materialize-textarea" name="Component7">{{Request::old('Component7')}}</textarea>
          <label for="Component7">Component7</label>
          @if ($errors->has('Component7'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component7') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component8" class="materialize-textarea" name="Component8">{{Request::old('Component8')}}</textarea>
          <label for="Component8">Component8</label>
          @if ($errors->has('Component8'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component8') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component9" class="materialize-textarea" name="Component9">{{Request::old('Component9')}}</textarea>
          <label for="Component9">Component9</label>
          @if ($errors->has('Component9'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component9') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component10" class="materialize-textarea" name="Component10">{{Request::old('Component10')}}</textarea>
          <label for="Component10">Component10</label>
          @if ($errors->has('Component10'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component10') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component11" class="materialize-textarea" name="Component11">{{Request::old('Component11')}}</textarea>
          <label for="Component11">Component11</label>
          @if ($errors->has('Component11'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component11') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component12" class="materialize-textarea" name="Component12">{{Request::old('Component12')}}</textarea>
          <label for="Component12">Component12</label>
          @if ($errors->has('Component12'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component12') }}</span>
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
        value="اضافة موضوع جديد" />
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