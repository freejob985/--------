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
            @if (count($latest_additions)>0)
            @foreach ($latest_additions as $item_customers)
            <tr class="hed">
                <td>{!! btn($item_customers->id,8) !!}</td>
                <td>{!! btn($item_customers->Subject,10) !!}</td>     
                <td>{!! btn($item_customers->user,10) !!}</td> 
                <td style="direction: initial;">{!! btn(time_since($item_customers->time),10) !!}</td>              
                <td>
                <img width="70" src="https://www.flaticon.com/premium-icon/icons/svg/2096/2096867.svg">
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