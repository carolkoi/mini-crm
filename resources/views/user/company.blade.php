
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">Company List</div>

                <div class="card-body">
                    
                <div class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{url('/add/company')}} " class="btn btn-success"> Add Company</a>
                    </div>

                   
                    <div class="panel panel-default">
            <div class="panel-heading">
                
            </div>

            <div class="panel-body">
                <table class="table table-striped company-table">

                	<thead>
                        <tr>
                		<th>ID</th>
                		<th>Name</th>
                		<th>Email</th>
                		<th>Logo Image</th>
                		<th>Website</th>
                		<th>Action</th>
                        </tr>
                	</thead>
                	<tbody>
                        @foreach($companies as $company)

                       
                        <tr>
                        
                		<td>{{$company->id}} </td>

                		<td class="table-txt">
                			<div>{{$company->name}} </div>
                		</td>

                		<td class="table-txt">
                			<div>{{$company->email}}</div>
                		</td>

                		<td class="table-txt">
                			<div>{{$company->logo}}</div>
                		</td>

                		<td class="table-txt">
                			<div>{{$company->website}}</div>
                		</td>
                   
                    

                		<td>
                                <a href="{{action('CompanyController@edit', $company->id)}}" class="btn btn-success">Edit</a>
                       </td>
                		<td>
                            <form action="{{action('CompanyController@destroy', $company->id)}} " method="post">

                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">

                                <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                        </td>
                        

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


                
                   



