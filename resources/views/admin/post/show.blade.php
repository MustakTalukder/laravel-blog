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
              <h3 class="box-title">Title</h3>
              <a class="col-lg-offset-5 btn btn-success" href="{{ route('post.create')}}">Add New</a>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              


                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Title</th>
                      <th>Sub Title</th>
                      <th>Slug</th>
                      <th>Created At</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($posts as $post)

                    <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->subtitle}}</td>
                    <td>{{ $post->slug}}</td>
                    <td>{{ $post->created_at}}</td>
                    <td>

                      <a href="{{ route('post.edit', $post->id)}}"><i class="fas fa-edit"></i></a>
                    
                    </td>

                    <td>
                    <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy', $post->id)}}" style="display: none">

                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                    </form>
                      <a 
                      href="" 
                      onclick="
                      if(confirm('Are you sure, You want to delete this?')){
                      event.preventDefault();  
                      document.getElementById('delete-form-{{$post->id}}')
                      .submit();

                      }else{
                        event.preventDefault();  
                      }
                      
                      "

                      ><i class="fas fa-trash-alt"></i></a>
                    </td>

                    @endforeach

                    </tr>


                    </tbody>



                    <tfoot>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </tfoot>
                  </table>




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