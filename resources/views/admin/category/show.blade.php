@extends('admin.layouts.app')


@section('main-content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blank page
            <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
              <a class="col-lg-offset-5 btn btn-success" href="{{ route('category.create')}}">Add New</a>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              



                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
  
                      @foreach ($categories as $category)
  
                      <tr>
                      <td>{{ $loop->index + 1}}</td>
                      <td>{{ $category->name}}</td>
                      <td>{{ $category->slug}}</td>
                      <td><i class="fas fa-edit"></i></td>
                      <td><i class="fas fa-trash-alt"></i></td>
  
                      @endforeach
  
                      </tr>
  
  
                      </tbody>
  
  
  
                      <tfoot>
                      <tr>
                        <th>S.No</th>
                        <th>CAtegory Name</th>
                        <th>Slug</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>








            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
    
        </section>
        <!-- /.content -->
      </div>

@endsection