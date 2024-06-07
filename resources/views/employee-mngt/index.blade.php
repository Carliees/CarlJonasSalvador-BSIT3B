@extends('layouts.app')


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employees Management') }}</h1>
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


        <script>
          (() => {
             'use strict'


                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  const forms = document.querySelectorAll('.needs-validation')


                  // Loop over them and prevent submission
                  Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                      if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                      }
                      form.classList.add('was-validated')
                    }, false)
                  })
                })()
        </script>
   
   <table class="table mt-5 bg-green">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ( $employee_sample as $key => $uniqueemployee)
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $uniqueemployee->first_name }}</td>
                            <td scope="col">{{ $uniqueemployee->last_name }}</td>
                            <td scope="col">{{ $uniqueemployee->address }}</td>
                            <td scope="col">
                            <a href="{{  route('uniqueemployee.edit', $uniqueemployee->id) }}">
                            <button class="btn btn-success btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            <form action="{{ route('uniqueemployee.destroy', $uniqueemployee->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-success btn-sm">Delete</button>
                            </form>
                            </td>
                          </tr>
                        @endforeach
               </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection