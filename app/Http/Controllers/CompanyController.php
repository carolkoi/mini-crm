<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\mail;
use App\Mail\CompanysMail;
use App\Company;
use validator;





class CompanyController extends Controller
{

	public function _construct(){

		$this->middleware('auth');
	}

    public function showCompanyMenu()
    {
    	return view('user.company');
    }

    public function getCompanyForm()
    {

    	return view('user.addcompany');
    }

    Public function store(Request $request){

        

    	$valid_data=$this->validate($request,[
    		'name'		=>		'required',
    		'email'		=>		'required',
    		'logo'		=>		'required|dimensions:max_width:300,max_height:200|mimes:png,jpg,jpeg',
    		'website'	=>		'required',
    	]);
    	    $file = request()->file('logo') ? request()->file('logo')->store('logo', 'public') : null;

            $company= new Company();

            Mail::to($request->email)->send(new CompanysMail($company));
   

    		Company::create($valid_data);
    	
   		return redirect('/company')->with('success','You sucessfully added new company!');
   			}

    public function index(){
    
    	$companies=Company::all();
    	return view ('user.company', compact('companies'));


    }

    public function edit($id)
    {
    	$company=Company::where('id')->first();

    	return view('user.editcompany')->with('id', $id);

    }

    public function update(Request $request, $id)
    {
    	$update_data=$this->validate($request,[
    		'name'		=>		'required',
    		'email'		=>		'required',
    		'logo'		=>		'required|dimensions:max_width:300,max_height:200|mimes:png,jpg,jpeg',
    		'website'	=>		'required',
    	]);

        Company::whereId($id)->update($update_data);
    	

    	 return redirect('/company')->with('success','You sucessfully perfomed a new company update!');

    }

    public function destroy($id)
    {
        try {

    	$company=Company::findOrFail($id);

    	$company->delete();

    	return redirect('/company')->with('success','You sucessfully perfomed a new company update!');
    

    
    // delete command here
} catch (\yii\db\Exception $e) {
    if ($e->errorInfo[1] == 1451) {
        throw new \yii\web\HttpException(400, 'Failed to delete the object.');
    } else {
        throw $e;
    }
}
}

// public function sendCompanyMail(Request $request, $id)
// {

//     $company=Company::findOrfail($id);

//     Mail::to($request->email)->send(new CompanysMail($company));

// }
// public function sendEmail (Request $request, $id) {

//     $company=Company::findOrfail($id);

//     Mail::to($request->email)->send(new CompanysMail($company));

   

// }

}

