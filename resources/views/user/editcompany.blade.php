@extends('layouts.app')



@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
      
    <!-- Form Error List -->
    @if($errors->any())
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

        <form action="{{action('CompanyController@update', $id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                 @csrf
                 @method('PATCH')
             
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"> Company  Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" value="">
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
                    <input type="submit" name="editcompany" value=" Update Company">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            

                   

               </div>
               </form>
            </div>
            </div>
        
    </div>
</div>


    
 

@endsection
