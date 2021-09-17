<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">ADMIN</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ route('admin.dashboard.index') }}" class="nav-link  active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-header">Quản lý chung</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Quản lý Blog
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display: none;">
          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách danh mục</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.category.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm danh mục</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách bài viết</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.post.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm bài viết mới</p>
            </a>
          </li>
        </ul>  
      </li>
      <li class="nav-header">Quản lý hệ thống</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Quản lý Users
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.users.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tạo mới User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.users.edit',['id'=>1]) }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Chỉnh sửa User</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>

<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Nguyễn Công Hoan</a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
