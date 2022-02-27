@extends('admin.layout.master')

@section('content')  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 >Employees</h1>
            
          </div>
          <div class="col-sm-6 text-right">
            
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ (Route::current()->getName()) }}</li>
            </ol>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="/employees/create" class="btn btn-primary btn-sm">Add Employee</a>
            
          </div>
          <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">employees</li>
            </ol> --}}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Employees</h3>
  
                  <div class="card-tools">
                    <form action="/employees/search" method="GET">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="searchText" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>EID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>DOB</th>
                        <th>GENDER</th>
                        <th>CONTACT NO</th>
                        <th>ADDRESS</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($employees as $employee)
                      <tr>
                        <td>{{ $employee->eid }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->dob }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->contact_no }}</td>
                        <td>{{ $employee->address }}</td>
                      
                        <td>
                          <a href="/employees/edit/{{$employee->eid}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i>
                          </a>
                          <a href="/employees/delete/{{$employee->eid}}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                        
                        
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/dist/js/demo.js') }}"></script>
@endsection