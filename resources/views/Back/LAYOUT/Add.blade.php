<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL('Back/1149168.ico')}}" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="{{ URL('Back/bootstrap/css/bootstrap.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dist/css/AdminLTE.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dist/css/skins/_all-skins.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/plugins/iCheck/flat/blue.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Harmattan&display=swap" rel="stylesheet">
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/plugins/datepicker/datepicker3.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/plugins/daterangepicker/daterangepicker-bs3.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dist/fonts/fonts-fa.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dist/css/bootstrap-rtl.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dist/css/rtl.css')}}" />
  <!--===============================================================================================-->
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <!--===============================================================================================-->
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!--===============================================================================================-->
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/css/nav.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/css/tabel.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/css/add.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

  <link rel="stylesheet" href="https://materializecss.com/css/ghpages-materialize.css">

  <link rel="stylesheet" href="{{ URL('Back/css/laravel_add.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.15/dist/sweetalert2.all.min.js">
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

  @stack('css')

</head>

<body class="skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      @include('Back.Source.sidebar')
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="row">
        <div class="col-xs-12">

          <div class="box-body">
            @yield('content')
          </div>

        </div>
      </div><!-- /.content-wrapper -->
      <div class="control-sidebar-bg"></div>

      <footer class="main-footer">
        <div class="pull-left hidden-xs">
          <b>Version</b> 2.2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
      </footer>
    </div>

    <div class="control-sidebar-bg"></div>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/dist/css/AdminLTE.min.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/dist/css/skins/_all-skins.min.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/plugins/iCheck/flat/blue.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/plugins/datepicker/datepicker3.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/plugins/daterangepicker/daterangepicker-bs3.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/dist/fonts/fonts-fa.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/dist/css/bootstrap-rtl.min.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ URL('Back/dist/css/rtl.css')}}" />
    <!--===============================================================================================-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/knob/jquery.knob.js') }}"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/fastclick/fastclick.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/dist/js/app.min.js') }}"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="{{ URL('Back/dist/js/demo.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/js/jquery.form.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/js/form.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.15/dist/sweetalert2.all.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ URL('Back/js/Prepared.js') }}"></script>
    <script src="{{ URL('Back/js/select.js') }}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script type="text/javascript">
      tinymce.init({
          selector: "#textarea",
          plugins: [
              "advlist autolink lists link image charmap print preview anchor",
              "searchreplace visualblocks code fullscreen",
              "insertdatetime media table paste"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
      });
  </script>
    <script>
      $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    </script>

    @stack('js')
</body>

</html>