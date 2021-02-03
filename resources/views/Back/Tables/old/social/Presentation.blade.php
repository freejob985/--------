@extends('Back.LAYOUT.MAINE')
@section('title', $Settings[0] )
@section('content')
@push('css')
@endpush
<div class="content">
    <section class="content-header">
        <div class="col-xs-12">
    </section>
    <table class="table table-bordered table-hover table-responsive content">
        <div class="box-header">
            <img src="{{ $Settings[2] }}" width="150"><br>
            <h3 class="box-title"
                style="text-align: right;direction: rtl;font-size: 28px;margin-top: -24px;margin-top: 1px;">
                {{ $Settings[0] }}</h3>
            <hr>
            <p>{{ $Settings[1] }}</p>
        </div>
        <br>
        <br>
        <br>
        <thead>
            <tr>
                <th>#</th>
                @foreach ($Columns as $item)
                <th>{{ $item }}</th>
                @endforeach
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>
            @if (count($social)>0)
            @foreach ($social as $item_customers)
            <tr class="hed">
                <td><span class="badge">{{ $item_customers->id}}</span></td>
                </td>
                <td>{!! set_lab_social($item_customers->name)!!}</td>
                <td><a href="{{ $item_customers->link}}" class="btn btn-info" role="button">رابط </a>
                </td>
                <td>
                    <a rel="tooltip" href="{{ route('social.edit', ['id'=>$item_customers->id]) }}"
                        class="btn btn-success btn-round btn-just-icon btn-sm" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <br>


</div>
<div class="control-sidebar-bg"></div>

@endsection

@push('scripts')
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