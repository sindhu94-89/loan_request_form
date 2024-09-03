<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoanFormRequest;
use App\Http\Requests\LoanFormUpdateRequest;
use App\Models\LoanRequestFormModel;
use App\Models\loanrequestform;


class LoanRequestFormController extends Controller
{
    protected $LoanRequestFormModel;

    public function  __construct(LoanRequestFormModel $LoanRequestFormModel){
        $this->LoanRequestFormModel = $LoanRequestFormModel;
    }

    public function dashboard(){
        $result = $this->LoanRequestFormModel->getForm();
        return view('form.dashboard')->with('result',$result);
    }
    public function RequestForm(){
        return view('form.LoanRequestForm');
    }
    public function createForm(LoanFormRequest $request){
        $validated = $request->validated();
        $result = $this->LoanRequestFormModel->createLoanForm($request->all());
        if($result['status_code']==200){
            return redirect('/')->with('success','Application created successfully');
        }else{
            return redirect('/')->with('failed','Unable to create application');
        }
        //return view('form.LoanRequestForm')->with(['result' => $result]);
    }
    public function editForm($id){
        $result = $this->LoanRequestFormModel->updateForm($id);
        return view('form.updateForm')->with(['result' => $result]);
        
    }
    public function updateLoanForm(LoanFormUpdateRequest $request){
        $validated = $request->validated();
        $result = $this->LoanRequestFormModel->updateFormPost($request);
        if($result['status_code']==200){
            return redirect('/')->with('success','Application updated successfully');
        }else{
            return redirect('/')->with('failed','Unable to update application');
        }
    }
    public function deleteForm($id){
        $result = $this->LoanRequestFormModel->deleteactionForm($id);
        if($result['status_code']==200){
            return redirect('/')->with('success','Application deleted successfully');
        }else{
            return redirect('/')->with('failed','Unable to delete application');
        }
    }
}
