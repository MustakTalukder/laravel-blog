
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
                <h3 class="box-title">Category</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
            <form role="form">
                <div class="box-body">


                    <div class="col-lg-6">


    
                        <div class="form-group">
                        <label for="name">Category Title</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Ttile">
                        </div>
    
    
                        <div class="form-group">
                        <label for="slug">Category Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                        </div>
    

        
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
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