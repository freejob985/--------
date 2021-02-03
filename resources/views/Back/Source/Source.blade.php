<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ URL('Back/bootstrap/css/bootstrap.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dashbord/font-awesome.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dashbord/ionicons.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dist/css/AdminLTE.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/dist/css/skins/_all-skins.min.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/plugins/iCheck/flat/blue.css')}}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{ URL('Back/plugins/morris/morris.css')}}" />
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

  @stack('css')

</head>

<body class="skin-blue sidebar-mini">
  <div class="wrapper">


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      @include('Back\Source\sidebar')
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-left hidden-xs">
        <b>Version</b> 2.2.0
      </div>
      <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript::;">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript::;">
                <i class="menu-icon fa fa-user bg-yellow"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript::;">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript::;">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul><!-- /.control-sidebar-menu -->


        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>
            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-left" checked>
              </label>
              <p>
                Some information about this general settings option
              </p>
            </div><!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-left" checked>
              </label>
              <p>
                Other sets of options are available
              </p>
            </div><!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-left" checked>
              </label>
              <p>
                Allow the user to show his name in blog posts
              </p>
            </div><!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-left" checked>
              </label>
            </div><!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-left">
              </label>
            </div><!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript::;" class="text-red pull-left"><i class="fa fa-trash-o"></i></a>
              </label>
            </div><!-- /.form-group -->
          </form>
        </div><!-- /.tab-pane -->
      </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

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
  <link rel="stylesheet" href="{{ URL('Back/plugins/morris/morris.css')}}" />
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
  <script src="{{ URL('Back/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
  <!--===============================================================================================-->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <!--===============================================================================================-->
  <script src="{{ URL('Back/bootstrap/js/bootstrap.min.js') }}"></script>
  <!--===============================================================================================-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <!--===============================================================================================-->
  <script src="{{ URL('Back/plugins/morris/morris.min.js') }}"></script>
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
  <script src="{{ URL('Back/dist/js/pages/dashboard.js') }}"></script>
  <!--===============================================================================================-->
  <script src="{{ URL('Back/dist/js/demo.js') }}"></script>
  <!--===============================================================================================-->
  @stack('scripts')

</body>

</html>