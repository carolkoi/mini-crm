<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable=['id', 'firstname', 'lastname', 'company_id', 'email', 'phone_no'];
    

    public function companies()
    {
    	return $this->belongsTo(Company::class);

    	$company=App\Employee::find(2);


    	
    }

}


