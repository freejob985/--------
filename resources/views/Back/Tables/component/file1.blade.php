@extends('Back.LAYOUT.Add')
@section('title', 'اضافة موضوع جديد')
@section('content')
<div class="container-fluid" style="
text-align: center;
font-size: 205%;
background: #011a25;
width: 100%;
padding: 4%;
color: white;
">
{{$component->pag}} &nbsp;<prog style="
font-size: 10px;
">{{$component->Language}}</prog>
  <img src="https://image.flaticon.com/icons/svg/634/634182.svg" width="120">
  <br>
  <br>
  <div class="container">
    @php
    //$url_bace= route('faq.index');
    @endphp
  </div>
</div>
<br>
<div class="container-fluid" style="height: 100%">
  <div class="container">
    <br>
    <br>
    <br>
    <br>

    <form action="/admin/component/{{$component->id}}/{{$component->pag}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component1" class="materialize-textarea" name="Component1">{{ $component->Component1}}</textarea>
          <label for="Component1">Component1</label>
          @if ($errors->has('Component1'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component1') }}</span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component2" class="materialize-textarea" name="Component2">{{ $component->Component2}}</textarea>
          <label for="Component2">Component2</label>
          @if ($errors->has('Component2'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component2') }}</span>
          @endif
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component3" class="materialize-textarea" name="Component3">{{ $component->Component3}}</textarea>
          <label for="Component3">Component3</label>
          @if ($errors->has('Component3'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component3') }}</span>
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