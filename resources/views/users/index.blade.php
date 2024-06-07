@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 m-auto">
          <div class="card card-primary">
            <div class="card-header bg-green">
              <h3 class="card-title">Quick Example</h3>
            </div>




            <form class=" row g-0 needs-validation p-3" action="{{route('employee_sample.store')}}" method="POST" novalidate>
              @csrf
                <div class="col-md-12 form-group">
                  <label for="validationCustom01" class="form-label">Name</label>
                  <input type="text" class="form-control" name="first_name" id="validationCustom" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
               
                      <div class="col-md-12 form-group">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="text" class="form-control" name="last_name" id="validationCustom02" required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="validationCustomUsername" class="form-label">Password</label>
                          <input type="text" class="form-control" name="address" id="validationCustomEmail"  required>
                          <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="validationCustomUsername" class="form-label">Confirm Password</label>
                          <input type="text" class="form-control" name="address" id="validationCustomEmail"  required>
                          <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                     
                      <div class="col-12 form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                      </div>
              </form>


          </div>
          </div>
        </div>
      </div>
     


     </section>


       
@endsection