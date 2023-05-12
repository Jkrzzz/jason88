@extends('admin.layouts.app')
@section('content')
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Link Edit
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Link</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  action="/admin/link/{{$link->id}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="linkName">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$link->name}}" id="linkName" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="linkLink">Link</label>
                            <input type="text" class="form-control" name="link" value="{{$link->link}}" id="linkLink" placeholder="Enter URL Address">
                        </div>


                    </div><!-- /.box-body -->

                    <div class="box-footer" style="display: flex; justify-content:end;">
                        <button type="submit" class="btn btn-primary" style="margin-right :2rem !important;">Update</button>
                        <a href="{{url('/admin/link')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (left) -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->
@endsection