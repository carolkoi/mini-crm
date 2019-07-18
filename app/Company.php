<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable=['id','name','email','logo','website'];
    //


    public function updateCompany($update_data)

    {
    	$company->id=$update_data['id'];
    	$company->name=$update_data['name'];
    	$company->email=$update_data['email'];
    	$company->logo=$update_data['logo'];
    	$company->website=$update_data['website'];
    	$company->save();
    	return 1;

    }

    public function employees()
    {
        return $this->hasMany(Employee::class);

        $employees=App\Company::find(2)->employees()->get();

        
    }
}
