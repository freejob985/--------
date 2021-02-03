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
            @if (count($customers)>0)
            @foreach ($customers as $item_customers)
            <tr class="hed">
                <td><span class="badge">{{ $item_customers->id}}</span></td>
                <td><img class="materialboxed" width="{{ $Settings[4] }}" src="{{Request::root()}}{!! $Settings[3] !!}{{ $item_customers->Image}}">
                </td>
                <td>{{ $item_customers->Name}}</td>
                <td>{{ $item_customers->Word}}</td>
                <td>{{ $item_customers->Language}}</td>
                <td><a href="{{ $item_customers->Facebook}}" class="btn btn-info" role="button"><i
                            class="fa fa-facebook-f"></i> </a></td>
                <td>
                    <a rel="tooltip" href="/admin/editpag/customers/{{ $item_customers->id}}" class="btn btn-success btn-round btn-just-icon btn-sm"
                        data-original-title="" title="">
                        <i class="material-icons">edit</i>
                </a>
                    
                    <button type="button" idt="{{ $item_customers->id}}" idm="{{ $item_customers->Image}}"
                        route="{{Request::root()}}/admin/dell/customers/{{ $item_customers->id}}/{{ $item_customers->Image}}" rel="tooltip"
                        class="btn btn-danger btn-round btn-just-icon btn-sm del" data-original-title="" title=""><i
                            class="material-icons">close</i></button>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <br>
    <a style="background: #011a25;" href="{{ $Settings[5] }}"  class="btn btn-primary btn-block btn-large">  <i class="large material-icons">add_box
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
type: 'post',
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