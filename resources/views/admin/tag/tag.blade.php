
@extends('admin.layouts.app')

@section('main-content')




<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">



                        <!-- general form elements -->
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
              </div>

              @include('includes.messages')


            <form role="form" action="{{ route('tag.store')}}" method="post" >

              {{ csrf_field() }}



                <div class="box-body">

                    <div class="col-lg-6">
    
                        <div class="form-group">
                        <label for="name">Tag Title</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Tag Ttile">
                        </div>
    
    
                        <div class="form-group">
                        <label for="slug">Tag Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                        </div>
    

        
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
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