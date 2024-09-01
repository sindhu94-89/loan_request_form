<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanRequestFormModel extends Model
{
    use HasFactory;
    
    public function createLoanForm($request){
        try{
            $data = ['desired_loan_amount' => $request['desired_loan_amount'],
                    'annual_income' => $request['annual_income'], 
                    'loan_used_for' => $request['loan_used_for'], 
                    'first_name' => $request['first_name'],
                    'last_name' => $request['last_name'],
                    'dob' => $request['dob'],
                    'marital_status' => $request['marital_status'],
                    'email' => $request['email'],
                    'phone_number' => $request['phone_number'],
                    'address' => $request['address'],
                    'occupation' => $request['occupation'],
                    'down_payment_amount' => $request['down_payment_amount'],
                    'institution_name' => $request['institution_name'],
                    'saving_account_number' => $request['saving_account_number'],
                    'agree_information' => $request['agree_information']
                    ];
            $create = loanrequestform::create($data);
            return ['status_code' => 200, 'message' => 'Loan Application Form created'];
        }catch(Exception $e){
            return ['status_code' => 400, 'message' => $e->getMessage()];
        }
    }

    public function getForm(){
        $result = loanrequestform::all();
        return $result;
    }
    public function updateForm($id){
        $result = loanrequestform::find($id);
        return $result;
    }
    public function updateFormPost($request){
        try{
            $result = loanrequestform::find($request['id']);

            $result->desired_loan_amount = $request->desired_loan_amount;
            $result->annual_income = $request->annual_income;
            $result->loan_used_for = $request->loan_used_for;
            $result->first_name = $request->first_name;
            $result->last_name = $request->last_name;
            $result->dob = $request->dob;
            $result->marital_status = $request->marital_status;
            $result->email = $request->email;
            $result->phone_number = $request->phone_number;
            $result->address = $request->address;
            $result->occupation = $request->occupation;
            $result->down_payment_amount = $request->down_payment_amount;
            $result->institution_name = $request->institution_name;
            $result->saving_account_number = $request->saving_account_number;
            $result->save();
            return ['status_code' => 200, 'message' => 'Loan Application Form updated'];
        }
        catch(Exception $e){
            return ['status_code' => 400, 'message' => $e->getMessage()];
        }
    }
    public function deleteactionForm($id){
        try{
            $delete = loanrequestform::find($id);
            $delete->delete();
            return ['status_code' => 200, 'message' => 'Application form deleted'];
        }
        catch(Exception $e){
            return ['status_code' => 400, 'message' => $e->getMessage()];
        }
    }
}
