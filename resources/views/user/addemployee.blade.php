@extends('layouts.app')



@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
      
    @if($errors->any())
    <div class="alert alert-danger">

    <strong>Whoops! Something went wrong.</strong>
    <ul>

    @foreach($errors->all() as $error)
    <li>
    	{{$error}}
    </li>

    @endforeach
    </ul>
</div>
    @endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
        <!-- Form -->
<fieldset><legend>Fill the Form</legend>
        <form action="{{url('/add/employee')}} " method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            
            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> First Name</label>

                <div class="col-sm-6">
                    <input type="text" name="firstname" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Last Name</label>

                <div class="col-sm-6">
                    <input type="text" name="lastname" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Company ID</label>

                <div class="col-sm-6">
                    <input type="text" name="company_id" class="form-control">
                </div>
            </div>

			<div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Email</label>

                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Phone Number</label>

                <div class="col-sm-6">
                    <input type="text" name="phone_no" class="form-control">
                </div>
            </div>
            <!-- Add Task Button -->
            <div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="addemployee" value="Add Employee">
                     </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
              
               </form>
               </fieldset>
            </div>
            </div>
        
    </div>
</div>



    
 

@endsection
