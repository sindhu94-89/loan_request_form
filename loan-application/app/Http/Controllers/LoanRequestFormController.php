<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoanFormRequest;
use App\Models\LoanRequestFormModel;

class LoanRequestFormController extends Controller
{
    protected $LoanRequestFormModel;

    public function  __construct(LoanRequestFormModel $LoanRequestFormModel){
        $this->LoanRequestFormModel = $LoanRequestFormModel;
    }
    
    public function RequestForm(){
        return view('form.LoanRequestForm');
    }
    public function createForm(LoanFormRequest $request){
        $validated = $request->validated();
        $result = $this->LoanRequestFormModel->createLoanForm($request->all());
        return view('form.LoanRequestForm')->with(['result' => $result]);
    }
}
