<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
<!--        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$adminUser->name}}</p>
            </div>
        </div>-->

        @php
        $currentUrl = \Illuminate\Support\Facades\Request::segment(2);
        @endphp
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@if($currentUrl == 'dashboard') active @endif">
                <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            
          

            <li class="treeview {{ in_array(\Request::route()->getName(), ["admin.pages.index","admin.pages.create","admin.pages.edit","admin.pages.show"]) ? "active" : "" }}">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>CMS Manager</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ in_array(\Request::route()->getName(), ["admin.pages.index","admin.pages.create","admin.pages.edit","admin.pages.show"]) ? "active" : "" }}">
                        <a href="{{ route('admin.pages.index')}}"><i class="fa fa-circle-o"></i> CMS Pages</a>
                    </li>
                </ul>
            </li> 
		
            <li class="treeview {{ in_array(\Request::route()->getName(), ["admin.enquirymanager.index"]) ? "active" : "" }}">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Enquiry Manager</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ in_array(\Request::route()->getName(), ["admin.enquirymanager.index"]) ? "active" : "" }}">
                        <a href="{{ route('admin.enquirymanager.index')}}"><i class="fa fa-circle-o"></i> Enquiry List</a>
                    </li>
                </ul>
            </li>

		<li class="treeview {{ in_array(\Request::route()->getName(), ["admin.usersmanager.index"]) ? "active" : "" }}">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users Manager</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ in_array(\Request::route()->getName(), ["admin.usersmanager.index"]) ? "active" : "" }}">
                        <a href="{{ route('admin.usersmanager.index')}}"><i class="fa fa-circle-o"></i> Users List</a>
                    </li>
                </ul>
            </li>


            <li class="treeview {{ in_array(\Request::route()->getName(), ["admin.hooks","admin.add-hooks","admin.edit-hooks","admin.view-hooks","admin.email-preferences.index","admin.email-preferences.create","admin.email-preferences.edit","admin.email-preferences.show", "admin.email-templates.index","admin.email-templates.create","admin.email-templates.edit","admin.email-templates.show"]) ? "active" : "" }}">
                <a href="#">
                    <i class="fa fa-fw fa-envelope-o"></i>
                    <span>Email Templates</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ in_array(\Request::route()->getName(), ["admin.hooks","admin.add-hooks","admin.edit-hooks","admin.view-hooks"]) ? "active" : "" }}"><a href="{{ route('admin.hooks')}}"><i class="fa fa-circle-o"></i> Hooks (slugs)</a></li>
                    <li class="{{ in_array(\Request::route()->getName(), ["admin.email-preferences.index","admin.email-preferences.create","admin.email-preferences.edit","admin.email-preferences.show"]) ? "active" : "" }}">
                            <a href="{{ route('admin.email-preferences.index') }}">
                                <i class="fa fa-circle-o"></i> Email Preferences (layouts)
                            </a>
                        </li>
                    <li  class="{{ in_array(\Request::route()->getName(), ["admin.email-templates.index","admin.email-templates.create","admin.email-templates.edit","admin.email-templates.show"]) ? "active" : "" }}">
                            <a href="{{ route('admin.email-templates.index') }}">
                                <i class="fa fa-circle-o"></i> Email Templates</a>
                            </li>
                </ul>
            </li>
            <li class="treeview {{ in_array(\Request::route()->getName(), ["settingtheme","setting.smtp","setting.general","setting.general.add","setting.general.view","setting.general.edit"]) ? "active" : "" }}">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>Settings</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ \Request::route()->getName() == "settingtheme" ? "active" : "" }}"><a href="{{url('admin/settings/logos')}}">
                            <i class="fa fa-circle-o"></i> Logo/Favicon Icon</a>
                    </li>
                    <li class="{{ in_array(\Request::route()->getName(), ["setting.general","setting.general.add","setting.general.edit","setting.general.view"]) ? "active" : "" }}">
                        <a href="{{url('admin/settings/logos')}}"><a href="{{url('admin/settings/general')}}"><i class="fa fa-circle-o"></i> General Settings</a>
                    </li>

                    <li class="{{ \Request::route()->getName() == "setting.smtp" ? "active" : "" }}"><a href="{{url('admin/settings/smtp')}}"><i class="fa fa-circle-o"></i> SMTP Details</a></li>
                    {{-- <li><a href="{{url('admin/settings/socials')}}"><i class="fa fa-circle-o"></i> Social Links</a></li> --}}
                </ul>
            </li>

            <li class="{{ in_array(\Request::route()->getName(), ["admin.changepassword"]) ? "active" : "" }}">
                <a href="{{ route("admin.changepassword") }}">
                    <i class="fa fa-unlock"></i> <span>Change Password</span>
                </a>
            </li>
            <li class="{{ in_array(\Request::route()->getName(), ["admin.changepassword"]) ? "active" : "" }}">
                    <a href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-sidebarform').submit();">
                    <i class="fa fa-power-off"></i> <span>{{ __('Logout') }}</span>
                </a>
                </li>

        </ul>
        <form id="logout-sidebarform" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </section>
    <!-- /.sidebar -->
</aside>
