
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-16">
        	
            <div class="card">
                <div class="card-header">Employee List</div>
                

                <div class="card-body">
                    
                <div class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{url('/add/employee')}} " class="btn btn-success"> Add Empoyee</a>
                    </div>
                    

                   
                    <div class="panel panel-default">
                    	
            <div class="panel-heading">
            	
                
            </div>
            

            <div class="panel-body">
                <table class="table table-striped company-table">

                	<thead>
                        <tr>
                		<th>ID</th>
                		<th>First Name</th>
                		<th>Last name</th>
                		<th>Company ID/Name</th>
                		<th>Email</th>
                		<th>Phone Number</th>
                        </tr>
                	</thead>
                	<tbody>

                        @foreach($employees as $employee)
                        
                        <tr>
                        
                		<td>{{$employee->id}} </td>

                		<td class="table-txt">
                			<div>{{$employee->firstname}} </div>
                		</td>

                		<td class="table-txt">
                			<div>{{$employee->lastname}}</div>
                		</td>
                		<td class="table-txt">
                			<div>{{$employee->company_id}}</div>
                		</td>

                		<td class="table-txt">
                			<div>{{$employee->email}}</div>
                		</td>

                		<td class="table-txt">
                			<div>{{$employee->phone_no}}</div>
                		</td>
                   
                		<td>
                                <a href="{{action('EmployeeController@edit', $employee->id)}} " class="btn btn-success">Edit</a>
                       </td>
                		<td>
                            <form action="{{action('EmployeeController@destroy', $employee->id)}} " method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">

                                <button class="btn btn-danger" type="submit">Delete</button>
                        </td>
                        </form>

                         </tr>
                         @endforeach
                	</tbody>
                </table>


                
                   



                 </div>
                 </div>
                 
            
        </div>
    </div>
</div>
</div>
</div>
