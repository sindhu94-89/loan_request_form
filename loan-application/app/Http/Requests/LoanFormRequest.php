<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\loanrequestform;


class LoanFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|regex:/^[A-Z]+$/i|min:4',
            'dob' => 'required|before:-21 years',
            'email' => 'required|email|unique:loanrequestform',
            'phone_number' => 'required|digits:10',
            'address' => 'required',
            'occupation' => 'required',
            'desired_loan_amount' => 'required',
            'annual_income' => 'required',
            'loan_used_for' => 'required',
            'down_payment_amount' => 'required',
            'institution_name' => 'required',
            'saving_account_number' => 'required',
            'agree_information' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'first_name is required!',
            'dob.required' => 'dob is required!',
            'email.required' => 'email is required!',
            'phone_number.required' => 'phone_number is required!',
            'address.required' => 'address is required!',
            'occupation.required' => 'occupation is required!',
            'desired_loan_amount.required' => 'desired_loan_amount is required!',
            'annual_income.required' => 'annual_income is required!',
            'loan_used_for.required' => 'loan_used_for is required!',
            'down_payment_amount.required' => 'down_payment_amount is required!',
            'institution_name.required' => 'institution_name is required!',
            'saving_account_number.required' => 'saving_account_number is required!',
            'agree_information.required' => 'agree_information is required!',
        ];
    }
}
