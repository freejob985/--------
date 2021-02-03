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
   // $url_bace= route('Section.index');
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


      <img class="responsive-img img-thumbnail" width="150"
      src="{{Request::root()}}/front/assets/images/backgrounds/{{ $component->Component1}}">

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
      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component4" class="materialize-textarea" name="Component4">{{ $component->Component4}}</textarea>
          <label for="Component4">Component4</label>
          @if ($errors->has('Component4'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component4') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component5" class="materialize-textarea" name="Component5">{{ $component->Component5}}</textarea>
          <label for="Component5">Component5</label>
          @if ($errors->has('Component5'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component5') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component6" class="materialize-textarea" name="Component6">{{ $component->Component6}}</textarea>
          <label for="Component6">Component6</label>
          @if ($errors->has('Component6'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component6') }}</span>
          @endif
        </div>
      </div>




      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component7" class="materialize-textarea" name="Component7">{{ $component->Component7}}</textarea>
          <label for="Component7">Component7</label>
          @if ($errors->has('Component7'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component7') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component8" class="materialize-textarea" name="Component8">{{ $component->Component8}}</textarea>
          <label for="Component8">Component8</label>
          @if ($errors->has('Component8'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component8') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component9" class="materialize-textarea" name="Component9">{{ $component->Component9}}</textarea>
          <label for="Component9">Component9</label>
          @if ($errors->has('Component9'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component9') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component10" class="materialize-textarea" name="Component10">{{ $component->Component10}}</textarea>
          <label for="Component10">Component10</label>
          @if ($errors->has('Component10'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component10') }}</span>
          @endif
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component11" class="materialize-textarea" name="Component11">{{ $component->Component11}}</textarea>
          <label for="Component11">Component5</label>
          @if ($errors->has('Component11'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component11') }}</span>
          @endif
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component12" class="materialize-textarea" name="Component12">{{ $component->Component12}}</textarea>
          <label for="Component12">Component12</label>
          @if ($errors->has('Component12'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component12') }}</span>
          @endif
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component13" class="materialize-textarea" name="Component13">{{ $component->Component13}}</textarea>
          <label for="Component13">Component13</label>
          @if ($errors->has('Component13'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component13') }}</span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component14" class="materialize-textarea" name="Component14">{{ $component->Component14}}</textarea>
          <label for="Component14">Component14</label>
          @if ($errors->has('Component14'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component14') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component15" class="materialize-textarea" name="Component15">{{ $component->Component15}}</textarea>
          <label for="Component15">Component15</label>
          @if ($errors->has('Component15'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component15') }}</span>
          @endif
        </div>
      </div>



      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component16" class="materialize-textarea" name="Component16">{{ $component->Component16}}</textarea>
          <label for="Component16">Component16</label>
          @if ($errors->has('Component16'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component16') }}</span>
          @endif
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component17" class="materialize-textarea" name="Component17">{{ $component->Component17}}</textarea>
          <label for="Component17">Component17</label>
          @if ($errors->has('Component17'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component17') }}</span>
          @endif
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component18" class="materialize-textarea" name="Component18">{{ $component->Component18}}</textarea>
          <label for="Component18">Component5</label>
          @if ($errors->has('Component18'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component18') }}</span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component19" class="materialize-textarea" name="Component19">{{ $component->Component19}}</textarea>
          <label for="Component19">Component19</label>
          @if ($errors->has('Component19'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component19') }}</span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component20" class="materialize-textarea" name="Component20">{{ $component->Component20}}</textarea>
          <label for="Component20">Component20</label>
          @if ($errors->has('Component20'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component20') }}</span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component21" class="materialize-textarea" name="Component21">{{ $component->Component21}}</textarea>
          <label for="Component21">Component21</label>
          @if ($errors->has('Component21'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component21') }}</span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component22" class="materialize-textarea" name="Component22">{{ $component->Component22}}</textarea>
          <label for="Component22">Component22</label>
          @if ($errors->has('Component22'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component22') }}</span>
          @endif
        </div>
      </div>


            <div class="row">
        <div class="input-field col s12">
          <textarea id="Component23" class="materialize-textarea" name="Component23">{{ $component->Component23}}</textarea>
          <label for="Component23">Component23</label>
          @if ($errors->has('Component23'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component23') }}</span>
          @endif
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="Component24" class="materialize-textarea" name="Component24">{{ $component->Component24}}</textarea>
          <label for="Component24">Component24</label>
          @if ($errors->has('Component24'))
          <span class="helper-text" data-error="wrong" data-success="right">{{ $errors->first('Component24') }}</span>
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