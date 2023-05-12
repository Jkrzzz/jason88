@extends('admin.layouts.app')
@section('content')
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Images Edit
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Image Table</h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Images</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($images as $image)
                            <tr>
                                <td>{{$image->id}}</td>
                                <td>{{$image->name}}</td>
                                <td>
                                    <img width="200px" src="{{asset('images/'.$image->image)}}" alt="">
                                </td>
                                <td>{{$image->category}}</td>
                                <td>
                                    <a href="/admin/topimage/{{$image->id}}/edit" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->
@endsection