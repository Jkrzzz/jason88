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
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit Top Gif</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"  action="/admin/topimage/{{$image->id}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="imageName">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$image->name}}" id="imageName" placeholder="Enter Name">
                        </div>
                        @if($image->link != null)
                            <div class="form-group">
                                <label for="imageLink">Link</label>
                                <input type="text" class="form-control" name="link" value="{{$image->link}}" id="imageLink" placeholder="Enter URL Address">
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="imgInput">Upload Image</label>
                            <input type="file"  
                            id="imgInput" name="image" >

                            <img id="imgsrc" width="600px" style="margin-top: 2rem" src="{{asset('images/'.$image->image)}}" alt="">
                            

                        </div>

                    </div><!-- /.box-body -->

                    <div class="box-footer" style="display: flex; justify-content:end;">
                        <button type="submit" class="btn btn-primary" style="margin-right :2rem !important;">Update</button>
                        <a href="{{url('/admin/topimage')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (left) -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->
@endsection