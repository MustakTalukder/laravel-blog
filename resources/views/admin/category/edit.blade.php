
@extends('admin.layouts.app')



@section('headSection')

<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}">
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}">
    
@endsection







@section('main-content')




<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">



                        <!-- general form elements -->
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Category</h3>

              </div>

              @include('includes.messages')

            <form role="form" action="{{ route('category.update', $category->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PUT') }}


                <div class="box-body">
                    <div class="col-lg-6">

    
                        <div class="form-group">
                        <label for="name">Category Title</label>
                        <input value="{{ $category->name }}" type="text" class="form-control" id="name" name="name" placeholder="Enter Category Ttile">
                        </div>
    
    
                        <div class="form-group">
                        <label for="slug">Category Slug</label>
                        <input value="{{ $category->slug}}" type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                        </div>
    

        
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('category.index')}}" class="btn btn-warning" >Back</a>
                        </div>

                    </div>
                <!-- /.box-body -->


                </div>  
            </form>







            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>
    





    
@endsection




@section('footerSection')
<!-- DataTables -->
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>



<script src="admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
@endsection