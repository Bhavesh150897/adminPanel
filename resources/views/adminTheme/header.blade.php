  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
          </form>
          @if(Auth::user()->is_admin == 1)
              <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="fas fa-user"></i> Update Profile</a>
              <a class="dropdown-item" href="{{ route('front.settings') }}"><i class="fas fa-cog"></i> Front Settings</a>
            @endif
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link dropdown-item text-center"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
      </li>
    </ul>
  </nav>