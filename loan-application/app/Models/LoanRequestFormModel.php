<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanRequestFormModel extends Model
{
    use HasFactory;
    
    public function createLoanForm($request){
        dd($result);
        return $result;
    }
}
