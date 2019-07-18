@extends('layouts.app')



@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @if (count($errors) > 0) 
    
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
        <!-- New Task Form -->

        <form action="{{action('CompanyController@store')}} " method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Task Name -->
            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Company  Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

			<div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Email</label>

                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Logo Image</label>

                <div class="col-sm-6">
                    <input type="file" name="logo" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Website</label>

                <div class="col-sm-6">
                    <input type="text" name="website" class="form-control">
                </div>
            </div>
            <!-- Add Task Button -->
            <div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="addcompany" value="Add Company">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            

                   

               </div>
               </form>
            </div>
            </div>
        
    </div>
</div>


    
 

@endsection
