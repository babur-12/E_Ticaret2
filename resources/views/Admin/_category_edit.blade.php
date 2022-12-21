@extends('layouts.admin')
@section('title','Admin Panel Edit')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit list</h3>
                </div>
                <div class="card-body">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form role="form" action="{{route('admin_category_update',$datalist->id)}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label> Parent </label>
                                    <select class="form-control select2" name="parent_id" style="width: 100%;">
                                        <option value="0" selected="selected">Ana Category</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$datalist->title}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords"value="{{$datalist->keywords}}"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" value="{{$datalist->description}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" value="{{$datalist->slug}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status" style="width: 100%;">
                                        <option selected="selected">{{$datalist->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
