<!DOCTYPE html>
<html>
    @include('admin.layouts.head')
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{url("admin/dashboard")}}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            @include('admin.layouts.nav')
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            @include('admin.layouts.sidebar')
        
            <!-- Right side column. Contains the navbar and content of the page -->
            @yield('content')
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


       @include('admin.layouts.script') 

    </body>
</html>