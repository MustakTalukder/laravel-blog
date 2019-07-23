@extends('admin.layouts.app')
@section('headSection')

<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}">
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}">
    
@endsection



@section('main-content')

<div class="content-wrapper">
       
  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box box-primary">

          <div class="box-header with-border">
              <h3 class="box-title">Title</h3>

          </div>
          @include('includes.messages')

          <form role="form" action="{{ route('post.update', $post->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="box-body">

              <div class="col-lg-6">
                
                <div class="form-group">
                  <label for="title">Post Title</label>
                <input value="{{ $post->title }}" type="text" class="form-control" id="title" name="title" placeholder="Enter Ttile">
                </div>
                
                <div class="form-group">
                  <label for="subtitle">Subtitle Title</label>
                  <input value="{{ $post->subtitle }}" type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Sub Ttile">
                </div>

                <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input value="{{ $post->slug }}" type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                </div>
          
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Write Post Body Here
                      <small>Simple and fast</small>
                    </h3>
                    <div class="pull-right box-tools">
                      <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i>
                      </button>
                    </div>
                </div>
                <div class="box-body pad">
                 
                    <textarea 
                    class="textarea" 
                    name="body" 
                    placeholder="Place some text here" 
                    style="width: 100%; height: 200px; font-size: 14px; 
                    line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                    >{{ $post->body }}</textarea>
                  
                </div>
              </div>
                <div class="checkbox">
                    <label>
                      <input 
                      type="checkbox" 
                      name="status" 
                      id="status"
                      
                      @if($post->status == 1) checked @endif

                      > Publish
                    </label>
                </div>

              </div>

              <div class="col-lg-6">

                  <div class="form-group">
                      <label for="image">File input</label>
                      <input type="file" name="image" id="image">
                  </div>
                  
              </div>

            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning" href="{{ route('post.index')}}">Back</a>
            </div>

                
          </form>
              
        </div>


      </div>

    </div>
       
  </section>
 
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