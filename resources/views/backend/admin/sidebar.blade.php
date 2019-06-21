<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        @if (!Auth::user()->image)
          <img src="/detail/avatar_hat.jpg" class="img-circle" alt="User Image">
        @else
          <img src="{{ Auth::user()->gravatar() }}" class="img-circle" alt="User Image">
        @endif
      </div>
      <div class="pull-left info">
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li>
        <a href="{{ route('index') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pencil"></i>
          <span>Edit Detail</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('personal.index') }}"><i class="fa fa-circle-o"></i> Skill Detail</a></li>
          <li><a href="{{ route('personal.edit', Auth::user()->id) }}"><i class="fa fa-circle-o"></i> Personal Detail</a></li>
          <li><a href="{{ route('personal.index') }}"><i class="fa fa-circle-o"></i> Language Detail</a></li>
          <li><a href="{{ route('personal.index') }}"><i class="fa fa-circle-o"></i> Education Detail</a></li>
          <li><a href="{{ route('experience.index') }}"><i class="fa fa-circle-o"></i> Experience Detail</a></li>
        </ul>
      </li>
        <li><a href="{{ route('personal.index') }}"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
        <li><a href="{{ route('personal.index') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
