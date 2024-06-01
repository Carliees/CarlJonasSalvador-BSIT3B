@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mm-4">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                
                <div class="col-lg-9">
                <div class="card card-primary" style="background-color:lightblue;">
              <div class="card-header" style="background-color:gray;">
                <h3 class="card-title">Add new Employee</h3>
              </div>
                            <form class="form-horizontal">
                

                 <br>
                


         <div class="form-group row justify-content-center">
             <div class="col-md-3">
                <label for="validationServer01" class="col-form-label text-md-end">First Name</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" name="First Name">
            </div>
  
  
            <div class="col-md-3">
                 <label for="middlename" class="col-form-label text-md-end">Middle Name</label>
                  <input type="text" class="form-control" name="Middle Name" placeholder="Optional">
            </div>

            <div class="col-md-3">
               <label for="validationServer03" class="col-form-label text-md-end">Last Name</label>
                <input type="text" class="form-control is-invalid" id="validationServer03"aria-describedby="validationServer03Feedback" name="Last Name">
                  <div id="validationServer03Feedback" class="invalid-feedback">
                         Please provide a Last Name.
                 </div>
                 </div>
                    </div>
                 
  

<div class="form-group row justify-content-center">
    <div class="col-md-7">
    <label for="validationServer04" class="col-form-label text-md-end">Address</label>
        <input type="text" class="form-control is-valid" id="validationServer04" name="Address" placeholder="House no./street/Baranggay">
    </div>

    <div class="col-md-2">
                    <label for="validationServer05" class="col-form-label text-md-end">Zip</label>
                      <input type="text" class="form-control is-invalid" id="validationServer05" name="Zip">
                    </div>
                  
</div>

<div class="form-group row justify-content-center">
<div class="col-md-3">
    <label for="validationServer06" class=" col-form-label text-md-end">City</label>
   
        <select class="form-control is-valid" >
            <option>Please Select your City</option>
           <option value="San Fernando">Los Angeles</option>
    
           <option value="city">Kansas</option>
        </select>
    </div>

<div class="col-md-3">
     <label for="validationServer07" class="col-form-label">State</label>
    
        <select class="form-control is-invalid">
            <option></option>
            <!-- Add your options here -->
        </select>
        <div id="validationServer07Feedback" class="invalid-feedback">
      Please select a State
    </div>
    </div>

     <div class="col-md-3">
    <label for="validationServer08" class="col-form-label">Country</label>
   
        <select class="form-control is-invalid">
            <option> </option>
            <!-- Add your options here -->
        </select>
        <div id="validationServer08Feedback" class="invalid-feedback">
      Please select a Country.
    </div>
</div>
</div>

<div class="form-group row justify-content-center">
<div class="col-md-2">
        <label for="validationServer09" class="col-form-label text-md-end">Age</label>
        <input type="text" class="form-control is-invalid" id="validationServer09" name="Age">
        <div id="validationServer08Feedback" class="invalid-feedback">
      Please provide your age.
    </div>
    </div>
  


<div class="col-md-5">
    <label for="validationServer10" class="col-form-label">Birthday</label>
    
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
            </div>
            <input type="text" class="form-control is-valid" id="birthday" name="birthday" placeholder ="mm/dd/yyyy">
        </div>
    </div>
</div>


<div class="form-group row justify-content-center">
    <div class="col-md-3">
    <label for="validServer10" class="col-form-label">Hired Date</label>
    
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
            </div>
            <input type="text" class="form-control is-invalid" id="hired" name="hired" placeholder="mm/dd/yyyy">
        </div>
    </div>



<div class="col-md-6">
    <label for="validationServer11" class="col-form-label">Department</label>
    
        <select class="form-control is-valid">
            <option>General Department</option>
            <!-- Add your options here -->
        </select>
    </div>
</div>
<div class="card-footer">
    
    <center><button type="submit" class="col-md-10 btn btn-primary" style="background-color: green; border-color: green;">Submit</button></center>
</div>
                  
                <!-- /.card-footer -->
              </form>
                      
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content -->
    
    
@endsection