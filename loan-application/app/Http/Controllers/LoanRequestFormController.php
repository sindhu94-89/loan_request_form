<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoanFormRequest;
use App\Models\MOMModel;

class LoanRequestFormController extends Controller
{
    public function RequestForm(){
        return view('form.LoanRequestForm');
    }
}
