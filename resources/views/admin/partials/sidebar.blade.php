<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-teal elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    <img src="../dist/img/recycraft.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-bold">Recycraft</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.users') }}" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>Users</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.scrap-categories') }}"
            class="nav-link {{ request()->is('admin/scrap-categories*') ? 'active' : '' }}">
            <i class="nav-icon far fa-list-alt"></i>
            <p>Scrap Category</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.handicrafts') }}"
            class="nav-link {{ request()->is('admin/handicrafts*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-recycle"></i>
            <p>Handicraft</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('feedback') }}"
            class="nav-link {{ request()->is('admin/feedback*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-comment-alt"></i>
            <p>Users Feedback</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
