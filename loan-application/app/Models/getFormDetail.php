<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoanRequestFormModel;

class getFormDetail extends Model
{
    use HasFactory;
    public function getForm(){
        $result = loanrequestform::select('first_name','last_name','dob', 'email')->get();
        return $result;
        /*$result = momModel::all();*/
        print_r($restult);
    }
}
