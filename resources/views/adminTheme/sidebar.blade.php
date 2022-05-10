  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminTheme/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Pro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminTheme/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sonagra</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item {{ Request::is('admin/dashboard') ? 'menu-open' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-user"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/category*') ? 'menu-open' : '' }}">
              <a href="{{ route('categorys.index') }}"  class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Category
                </p>
              </a>
            </li>
             {{-- <li class="nav-item {{ Request::is('admin/post*') ? 'menu-open' : '' }}">
              <a href="{{ route('posts.index') }}"  class="nav-link {{ Request::is('admin/post*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Post
                </p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/update-post*') ? 'menu-open' : '' }}">
              <a href="{{ route('update.post') }}"  class="nav-link {{ Request::is('admin/update-post*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Update Post
                </p>
              </a>
            </li> --}}
            <li class="nav-item {{ Request::is('admin/tag*') ? 'menu-open' : '' }}">
              <a href="{{ route('tags.index') }}"  class="nav-link {{ Request::is('admin/tag*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tag"></i>
                <p>
                  Tag
                </p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/languages*') ? 'menu-open' : '' }}">
              <a href="{{ route('languages.index') }}"  class="nav-link {{ Request::is('admin/languages*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-language"></i>
                <p>
                  Languages
                </p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/tutorial*') ? 'menu-open' : '' }}">
              <a href="{{ route('tutorials.index') }}"  class="nav-link {{ Request::is('admin/tutorial*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Tutorial
                </p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/blogs*') ? 'menu-open' : '' }}">
              <a href="{{ route('blogs.index') }}"  class="nav-link {{ Request::is('admin/blogs*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  Blog
                </p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/image*') ? 'menu-open' : '' }}">
              <a href="{{ route('image.create') }}"  class="nav-link {{ Request::is('admin/image*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-image"></i>
                <p>
                  Image
                </p>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/subscriber*') ? 'menu-open' : '' }}">
              <a href="{{ route('admin.subscriber.index') }}"  class="nav-link {{ Request::is('admin/subscriber*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-mail-bulk"></i>
                <p>
                  Subscriber
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>