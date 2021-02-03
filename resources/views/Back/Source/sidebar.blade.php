<!-- Left side column. contains the logo and sidebar -->

<aside class="main-sidebar">
  <header class="main-header">
    <!-- Logo -->

    <!-- Header Navbar: style can be found in header.less -->

  </header>
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-home"></i>
          <i class="fa fa-angle-left pull-right"></i>
          <span>الرئسية</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('slide.index') }}"><i class="fa fa-circle-o"></i> السلايدر</a></li>
          <li><a href="{{ route('skills.index') }}"><i class="fa fa-circle-o"></i>المهارات</a></li>
          <li><a href="{{ route('services.index') }}"><i class="fa fa-circle-o"></i> الخدمات</a></li>
          <li><a href="{{ route('works.index') }}"><i class="fa fa-circle-o"></i> الاعمال </a></li>
          <li><a href="{{ route('recent.index') }}"><i class="fa fa-circle-o"></i> أخر الاعمال </a></li>
          <li><a href="{{ route('section_work.index') }}"><i class="fa fa-circle-o"></i> اقسام العملاء  </a></li>
          <li><a href="{{ route('customers.index') }}"><i class="fa fa-circle-o"></i> العملاء</a></li>
          <li><a href="{{ route('opinions.index') }}"><i class="fa fa-circle-o"></i> اراء العملاء</a></li>
          <li><a href="{{ route('blog.index') }}"><i class="fa fa-circle-o"></i> المدونة</a></li>
          <li><a href="{{ route('blog_sections.index') }}"><i class="fa fa-circle-o"></i> اقسام المدونة</a></li>
          <li><a href="{{ route('instagram.index') }}"><i class="fa fa-circle-o"></i> instagram</a></li>
          <li><a href="{{ route('we.index') }}"><i class="fa fa-circle-o"></i> الذي نفعله</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i>
          <span>نماذج البيانات</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('contact.index') }}"><i class="fa fa-circle-o"></i>الاتصال</a>
          </li>

        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i>
          <span>مكونات  انجليزي</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <?php
          $id=1;
          ?>
          @foreach(DB::table('component')->get()->where('Language','English') as $item_component)
          <li><a href="/admin/com{{$id++ }}/{{$item_component->Language}}"><i class="fa fa-circle-o"></i>{{ $item_component->pag}}</a></li>
          @endforeach
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i>
          <span>مكونات عربي</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <?php
          $id=1;
          ?>
          @foreach(DB::table('component')->get()->where('Language','Arabic') as $item_component)
          <li><a href="/admin/com{{$id++ }}/{{$item_component->Language}}"><i class="fa fa-circle-o"></i>{{ $item_component->pag}}</a></li>
          @endforeach
        </ul>
      </li>

      <li class="header">LABELS</li>
      @if (auth()->user()->hasRole('Manager'))
      <li><a href="{{ route('index.show') }}"><i class="fa fa-circle-o text-aqua"></i> <span>الصفحة الرئسية</span></a>
      </li>
      <li><a href="{{ route('notifications.index') }}"><i class="fa fa-circle-o text-red"></i> <span>الاشعارات</span></a></li>
      <li><a href="{{ route('latest_additions.index') }}"><i class="fa fa-circle-o text-red"></i> <span>اخرالاضافات</span></a></li>
      @endif
      <li><a href=" {{ route('logout') }} "><i class="fa fa-circle-o text-aqua"></i> <span>تسجيل الخروج</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->