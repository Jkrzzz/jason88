<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/img/admin1.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{(request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a href="{{url('/admin/dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span style="padding-left:1rem;">Dashboard</span>
                </a>
            </li>
            <li class="{{(request()->segment(2) == 'topimage') ? 'active' : '' }}">
                <a href="{{url('/admin/topimage')}}">
                    <i class="fa-solid fa-image"></i><span style="padding-left:1rem;">Images</span>
                </a>
            </li>
            <li class="{{(request()->segment(2) == 'link') ? 'active' : '' }}">
                <a href="{{url('/admin/link')}}">
                    <i class="fa-solid fa-image"></i><span style="padding-left:1rem;">Links</span>
                </a>
            </li>
        </ul>
        <div style="padding:1rem 0  0 1rem;">
            <a class="btn btn-success" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </section>
    

    <!-- /.sidebar -->
</aside>