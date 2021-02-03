@extends('Back.LAYOUT.MAINE')
@section('title', $Settings[0] )
@section('content')
@push('css')

<link rel="stylesheet" href="{{ URL('Back/css/laravel_user.css')}}" />
<link rel="stylesheet" href="{{ URL('Back/css/laravel_add.css')}}" />

@endpush

@include('Back.Tables.users.Users')
@include('Back.Tables.users.Add')
@include('Back.Tables.users.rights')

<a class="btn-floating btn-large waves-effect waves-light red  modal-trigger" href="#modal1"><i
        class="material-icons">add</i></a>
<!-- Modal Trigger -->

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="row">
                <div class="input-field col s6">
                    <input id="name" type="text" class="validate" name="name" value="{{Request::old('name')}}">
                    <label class="active" for="name">اسم المستخدم</label>
                    @if ($errors->has('name'))
                    <span class="helper-text" data-error="wrong"
                        data-success="right">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="email" class="materialize-textarea" name="email">{{Request::old('email')}}</textarea>
                    <label for="email">البريد الالكتروني</label>
                    @if ($errors->has('email'))
                    <span class="helper-text" data-error="wrong"
                        data-success="right">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" type="text" class="validate" name="password"
                        value="{{Request::old('password')}}">
                    <label class="active" for="password">كلمة المرور</label>
                    @if ($errors->has('password'))
                    <span class="helper-text" data-error="wrong"
                        data-success="right">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <input type="submit" style="background: #011a25;" class="btn btn-primary btn-large btn-block"
                value="اضافة موضوع جديد" />


        </form>
    </div>
    <div class="modal-footer">
    </div>
</div>


@endsection

@push('scripts')
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.modal');
var instances = M.Modal.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
$('.modal').modal();
});

$(document).ready(function() {
$(".del").click(function () {
var id=$(this).attr('idt');
var img=$(this).attr('idm');
var route=$(this).attr('route');
const swalWithBootstrapButtons = Swal.mixin({
customClass: {
confirmButton: 'btn btn-success',
cancelButton: 'btn btn-danger'
},
buttonsStyling: false
})
swalWithBootstrapButtons.fire({
title: 'هل انت متأكد من حذف البيانات',
text: "من جدول {{ $Settings[0] }}",
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'تأكيد الحذف',
cancelButtonText: 'الغاء الحذف',
reverseButtons: true
}).then((result) => {
if (result.value) {
$.ajax(
{
url: route,
type: "post",
data: {id: id, img: img},
success: function (data){
swalWithBootstrapButtons.fire(
'تم الحذف!',
'تم بنجاح حذف الملف .',
'success'
)
setTimeout(location.reload(), 1000);

}
});
} else if (
/* Read more about handling dismissals below */
result.dismiss === Swal.DismissReason.cancel
) {
swalWithBootstrapButtons.fire(
'تم الالغاء',
'تم الغاء حذف الملف',
'error'
)
}
})
});
@endpush