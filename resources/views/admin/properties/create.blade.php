@extends('admin.layout.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Property</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">

            <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Property</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/properties/store" class="form-horizontal">
                @csrf
                <div class="card-body">

                  <div class="form-group row">
                    <label for="location" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                      <input name="location" type="Text" class="form-control" id="location" placeholder="Location">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input name="price" type="Text" class="form-control" id="price" placeholder="Price">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="area" class="col-sm-2 col-form-label">Area</label>
                    <div class="col-sm-10">
                      <input name="area" type="Text" class="form-control" id="area" placeholder="Area">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                      <input name="type" type="Text" class="form-control" id="type" placeholder="Type">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="baths" class="col-sm-2 col-form-label">Baths</label>
                    <div class="col-sm-10">
                      <input name="baths" type="Text" class="form-control" id="baths" placeholder="Baths">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="rooms" class="col-sm-2 col-form-label">Rooms</label>
                    <div class="col-sm-10">
                      <input name="rooms" type="Text" class="form-control" id="rooms" placeholder="Rooms">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="stories" class="col-sm-2 col-form-label">Stories</label>
                    <div class="col-sm-10">
                      <input name="stories" type="Text" class="form-control" id="stories" placeholder="Stories">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input name="description" type="Text" class="form-control" id="description" placeholder="Description">
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary float-right">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
        
          </div>
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-6">
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    

  <!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/dist/js/demo.js') }}"></script>
@endsection