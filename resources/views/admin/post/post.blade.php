@extends('admin.layouts.app')
@section('headSection')

<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}">
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}">
<link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
    
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

          <form role="form" action="{{ route('post.store') }}" method="post">
            {{ csrf_field() }}

            <div class="box-body">

              <div class="col-lg-6">
                
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Ttile">
                </div>
                
                <div class="form-group">
                  <label for="subtitle">Subtitle Title</label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Sub Ttile">
                </div>
                <div class="form-group">
                  <label for="slug">Post Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                </div>
          

                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="status" id="status" value="1"> Publish
                    </label>
                </div>

              </div>

              <div class="col-lg-6">

                  <div class="form-group">
                      <label for="image">File input</label>
                      <input type="file" name="image" id="image">
                  </div>



                  <div class="form-group" data-select2-id="13">
                      <label>Select Tag</label>
                      <select 
                      class="form-control select2 select2-hidden-accessible" 
                      multiple="" 
                      data-placeholder="Select a State" 
                      style="width: 100%;" 
                
                      tabindex="-1" 
                      aria-hidden="true"
                      name="tags[]"
                      >

                      @foreach ($tags as $tag)
                      
                      <option value="{{ $tag->id }}" >
                        {{$tag->name}}
                      </option>
                          
                      @endforeach


                      </select>
                    </div>

                  <div class="form-group" data-select2-id="14">
                      <label>Select Category</label>
                      <select 
                      class="form-control select2 select2-hidden-accessible" 
                      multiple="" 
                      data-placeholder="Select a Category" 
                      style="width: 100%;" 
                     
                      tabindex="-1" 
                      aria-hidden="true"
                      name="categories[]"
                      >
                      @foreach ($categories as $category)
                      
                      <option value="{{ $category->id }}" >{{$category->name}}</option>
                              
                      @endforeach


                      </select>
                  </div>
                  
              </div>

              <div class="col-lg-12">
                  <div class="box">

                    <div class="box-body pad">
                     
                        <textarea id="editor1" name="body" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      
                    </div>
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


<!-- Select2 -->
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>
  $(document).ready(function(){
    $(".select2").select2();
  });
</script>


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



{{-- CK Editor full pack --}}
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>

@endsection