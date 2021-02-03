@extends('Back.LAYOUT.Add')
@section('title', 'writer')
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
</div>
<br>

<div class="container-fluid">

  <form action="#">
    <p>
      <label>
        <input type="checkbox" />
        <span>Red</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" />
        <span>Yellow</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Filled in</span>
      </label>
    </p>
    <p>
      <label>
        <input id="indeterminate-checkbox" type="checkbox" />
        <span>Indeterminate Style</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" disabled="disabled" />
        <span>Green</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" disabled="disabled" />
        <span>Brown</span>
      </label>
    </p>
  </form>
  <input type="text" class="datepicker">
  <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Red</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Yellow</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio" />
        <span>Green</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" disabled="disabled" />
        <span>Brown</span>
      </label>
    </p>
  </form>
  <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>

  <div class="input-field col s12">
    <select multiple>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Multiple Select</label>
  </div>

  <div class="input-field col s12">
    <select>
      <optgroup label="team 1">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
      </optgroup>
      <optgroup label="team 2">
        <option value="3">Option 3</option>
        <option value="4">Option 4</option>
      </optgroup>
    </select>
    <label>Optgroups</label>
  </div>

  <div class="input-field col s12 m6 ">
    <select class="icons select_index">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="https://image.flaticon.com/icons/svg/2210/2210014.svg">example 1</option>
      <option value="" data-icon="https://image.flaticon.com/icons/svg/2210/2210014.svg">example 2</option>
      <option value="" data-icon="https://image.flaticon.com/icons/svg/2210/2210014.svg">example 3</option>
    </select>
    <label>Images in select</label>
  </div>
  <div class="input-field col s12 m6 " >
    <select class="icons select_index">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="https://image.flaticon.com/icons/svg/2210/2210014.svg" class="left">example 1</option>
      <option value="" data-icon="https://image.flaticon.com/icons/svg/2210/2210014.svg" class="left">example 2</option>
      <option value="" data-icon="https://image.flaticon.com/icons/svg/2210/2210014.svg" class="left">example 3</option>
    </select>
    <label>Images in select</label>
  </div>

  <label>Browser Select</label>
  <select class="browser-default">
    <option value="" disabled selected>Choose your option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>
  <!-- Switch -->
  <div class="switch">
    <label>
      Off
      <input type="checkbox">
      <span class="lever"></span>
      On
    </label>
  </div>

  <!-- Disabled Switch -->
  <div class="switch">
    <label>
      Off
      <input disabled type="checkbox">
      <span class="lever"></span>
      On
    </label>
  </div>
  <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
  </form>
  <input type="text" class="timepicker">
  <div class="alert alert-success">
    <div class="container">
      <div class="alert-icon">
        <i class="material-icons">check</i>
      </div>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="material-icons">clear</i></span>
      </button>
      <b>Success Alert:Yuhuuu! You've got your $11.99 album from The Weeknd</b>
    </div>
  </div>
</div>
<a class="waves-effect waves-light btn-large btn-block"><i class="material-icons right">cloud</i>button</a>

@endsection
@push('css')

@endpush
@push('scripts')



@endpush