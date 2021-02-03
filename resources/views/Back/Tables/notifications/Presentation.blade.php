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
          {{   DB::table('notifications')->whereNull('read_at')->count() }}
        </div>
        <br>
        <br>
        <br>
        <thead>
            <tr>
                @foreach ($Columns as $item)
                <th>{{ $item }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @if (count($notifications)>0)
            @foreach ($notifications as $item_customers)
            <?php
            if($item_customers->type=="App\Notifications\sendconact"){
                $item_customers->type="Contact" ;
                $msg= $item_customers->data['Message'];
            }else{
                $item_customers->type="Book Online consultation" ;
                $msg= $item_customers->data['request'];
            }
            ?>
            <tr class="hed">
                <td><img src="https://image.flaticon.com/icons/svg/2228/2228032.svg" width="50"  class="img-responsive"></td>
                <td>{!! btn($item_customers->type,"9px") !!}</td>
                <td>{!! btn( $msg,"14px") !!}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <br>
    <a style="background: #011a25;" href="{{ route('main_services.create') }}"
        class="btn btn-primary btn-block btn-large">
        <i class="large material-icons">add_box
        </i>اضافةموضوع جديد</a>

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