<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="/admin/images/logo-icon.png" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h5 class="logo-text">ADMIN WEB</h5>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.dashboard.index') }}"><i class="fadeIn animated bx bx-list-ul"></i>Analytics</a>
                </li>
                <li> <a href="index2.html"><i class="fadeIn animated bx bx-right-arrow"></i>Sales</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Quản lý Blogs</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-2">
                    <i class="fadeIn animated bx bx-book-bookmark"></i>
                </div>
                <div class="menu-title">Quản lý danh mục</div>
            </a>
            <ul>
                <li> 
                    <a href="{{ route('admin.category.index') }}">
                        <i class="fadeIn animated bx bx-list-ul"></i> Danh sách danh mục
                    </a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Đang cập nhật</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-7">
                    <i class="fadeIn animated bx bx-notepad"></i>
                </div>
                <div class="menu-title">Quản lý bài viết</div>
            </a>
            <ul>
                <li> 
                    <a href="{{route('admin.post.index')}}">
                        <i class="fadeIn animated bx bx-list-ul"></i>
                        Danh sách bài viết
                    </a>
                </li>
                <li> <a href="index2.html"><i class="fadeIn animated bx bx-right-arrow"></i> Đang cập nhật</a>
                </li>
            </ul>
            <li>
                <a href="{{route('admin.tag.index')}}">
                    <div class="parent-icon icon-color-9"><i class="lni lni-tag"></i> 
                    </div>
                    <div class="menu-title"> Quản lý các thẻ</div>
                </a>
            </li>
        </li>
        <li class="menu-label">Quản lý hệ thống</li>
        <li>
            <a href="{{route('admin.users.index')}}">
                <div class="parent-icon icon-color-9"><i class="fadeIn animated bx bx-user"></i>
                </div>
                <div class="menu-title">Quản lý người dùng</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-7">
                    <i class="bx bx-lock"></i>
                </div>
                <div class="menu-title" style="width: 150px;">Quyền truy cập & bảo mật</div>
            </a>
            <ul>
                <li> 
                    <a href="{{ route('admin.role.index') }}">
                        <i class="bx bx-cog"></i>
                        Quản lý vai trò
                    </a>
                </li>
                <li> 
                    <a href="index2.html">
                        <i class="fadeIn animated bx bx-right-arrow"></i> 
                        Các quyền truy cập
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.menu.index')}}">
                <div class="parent-icon icon-color-4"><i class="fadeIn animated bx bx-menu"></i></i>
                </div>
                <div class="menu-title">Quản lý menu</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>