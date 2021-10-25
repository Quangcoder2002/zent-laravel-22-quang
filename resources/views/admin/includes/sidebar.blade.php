<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
     @if (auth()->user()->userInfo != null)
      <img src="@if (auth()->user()->userInfo->avatar != null) {{ asset('/storage/'.auth()->user()->userInfo->avatar)}} @else https://lh3.googleusercontent.com/proxy/w9NA_6Kij_7GTq6Qt3U9qkAuh05yVgLXo3jAaWm3M_5MaHUnhNV9aSLxuJ8Y8ebAqCjZCEQltZVoaBHXsmwn-NA6N0fvp6l4 @endif" width="40px" height="40px">
      @else
      <img src="https://lh3.googleusercontent.com/proxy/w9NA_6Kij_7GTq6Qt3U9qkAuh05yVgLXo3jAaWm3M_5MaHUnhNV9aSLxuJ8Y8ebAqCjZCEQltZVoaBHXsmwn-NA6N0fvp6l4" width="40px" height="40px">
    @endif
    </div>
    <div class="info">
      <a href="#" class="d-block">{{ auth()->user()->name }}</a>
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
      <li class="nav-item @if (request()->routeIs('admin.dashboard.*')) menu-is-opening menu-open @endif">
        <a href="{{ route('admin.dashboard.index') }}" class="nav-link  @if (request()->routeIs('admin.dashboard.*')) active @endif">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-header">Quản lý chung</li>
      <li class="nav-item @if (request()->routeIs('admin.category.*')||request()->routeIs('admin.post.*')||request()->routeIs('admin.tag.*')) menu-is-opening menu-open @endif">
        <a href="#" class="nav-link @if (request()->routeIs('admin.category.*')||request()->routeIs('admin.post.*')||request()->routeIs('admin.tag.*')) active @endif">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Quản lý Blog
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display:@if (request()->routeIs('admin.category.*') || request()->routeIs('admin.post.*')||request()->routeIs('admin.tag.*'))block @endif;">
          <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link @if (request()->routeIs('admin.category.*')) active @endif">
              <i class="far fa-circle nav-icon"></i>
              <p>Quản lý danh mục</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link @if (request()->routeIs('admin.post.*')) active @endif">
              <i class="far fa-circle nav-icon"></i>
              <p>Quản lý bài viết</p>
            </a>
          </li>
          <li class="nav-item">
            <li class="nav-item">
              <a href="{{ route('admin.tag.index') }}" class="nav-link @if (request()->routeIs('admin.tag.*')) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý Tags</p>
              </a>
            </li>
         
        </ul>  
      </li>
      <li class="nav-header">Quản lý hệ thống</li>
      <li class="nav-item @if (request()->routeIs('admin.users.*')) menu-is-opening menu-open @endif">
        <a href="#" class="nav-link @if (request()->routeIs('admin.users.*')) active @endif">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Quản lý Users
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link @if (request()->routeIs('admin.users.index')) active @endif">
              <i class="far fa-circle nav-icon"></i>
              <p>Quản lý users</p>
            </a>
          </li>
        </ul>
      </li>
        {{-- <li class="nav-header">Quản lý phân quyền</li> --}}
        <li class="nav-item @if (request()->routeIs('admin.permission.*')||request()->routeIs('admin.role.*')) menu-is-opening menu-open @endif">
          <a href="#" class="nav-link @if (request()->routeIs('admin.permission.*')||request()->routeIs('admin.role.*')) active @endif">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Quản lý phân quyền
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.permission.index') }}" class="nav-link @if (request()->routeIs('admin.permission.*')) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Quản lý permissions</p>
              </a>
            </li>
              <li class="nav-item">
                <a href="{{ route('admin.role.index') }}" class="nav-link @if (request()->routeIs('admin.role.*')) active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý roles</p>
                </a>
              </li>
          </ul>
        </li>
          
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
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
