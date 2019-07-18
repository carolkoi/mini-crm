<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function _construct()
    {
    	$this->middleware('auth');
    }

    	public function getEmployeeForm(){
    		return view('user/addemployee');


    	}

    	public function store(Request $request){

    		$emp_post_form=$this->validate($request,[
    			'firstname'		=>		'required',
    			'lastname'		=>		'required',
                'company_id'    =>      'required',
    			'email'		=>		'required',
    			'phone_no'	=>		'required',
    		]);
    		
    		Employee::create($emp_post_form);

    		return redirect('/employee')->with('success', 'New Employee added successfully!');
    	}


    	public function index(){

    		$employees=Employee::all();


    		return view('user.employee', compact('employees'));
    	}

    	public function edit($id){

    		$employee=Employee::findOrfail($id);


    		return view('user.editemployee', compact('employee'))->with('id', $id);
    	}

        public function destroy($id)
        {
            $employee=Employee::find($id);
            $employee->delete();
            return redirect('/employee')->with('success', 'Employee deleted successfully!');

        }

        public function update(Request $request, $id)
        {
            
            $update_data=$this->validate($request,[
                'firstname'     =>      'required',
                'lastname'      =>      'required',
                'email'     =>      'required',
                'phone_no'  =>      'required',
            ]);

            Employee::whereId($id)->update($update_data);

            return redirect('/employee')->with('success', 'Employee updated successfully!');

       }

    }

