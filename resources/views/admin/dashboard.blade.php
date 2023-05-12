@extends('admin.layouts.app')
@section('content')
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>
                           {{Auth::user()->count()}}
                        </h3>
                        <p>
                            Admin Registrations
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('register')}}" class="small-box-footer">
                        Create User <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>
                            {{$visitors}}
                        </h3>
                        <p>
                            Unique Visitors
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <div class="small-box-footer" style="height:25px;">
                        
                    </div>
                </div>
            </div><!-- ./col -->
        </div><!-- /.row -->

        <!-- /.row -->
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{ \Session::get('success') }}</li>
            </ul>
        </div>
    @endif  
    <div class="row">
        <div class="col-lg-6 connectedSortable">
                                        <!-- Calendar -->
            <div class="box box-warning">
                <div class="box-header">
                    <div class="box-title">Calendar</div>
                    
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                    </div><!-- /. tools -->                                    
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar"></div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->
@endsection
