<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin.dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
                <img src="{{ asset('storage/settings/' . config('get.MAIN_FAVICON')) }}" style="max-height:38px;" /></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                <img src="{{ asset('storage/settings/' . config('get.MAIN_LOGO')) }}" style="max-height:40px; max-width:200px;" /></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"> --}}
                        <span class="hidden-xs">{{$adminUser->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="height: auto;">
                            <p>
                                {{$adminUser->name}}
                              <small>{{$adminUser->email}}</small>
                            </p>
                          </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <!--<div class="pull-left">
                                <a href="{{url('admin/profile')}}" class="btn btn-default btn-flat">Profile</a>
                            </div>-->
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                             </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
