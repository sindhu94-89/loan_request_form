<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class loanrequestform extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'marital_status',
        'email',
        'phone_number',
        'address',
        'occupation',
        'desired_loan_amount',
        'annual_income',
        'loan_used_for',
        'down_payment_amount',
        'institution_name',
        'saving_account_number',
        'agree_information',

    ];
    protected $dates = ['deleted_at'];
    
    protected $table = "loanrequestform";

}
