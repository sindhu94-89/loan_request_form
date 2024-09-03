<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanFormUpdateRequest extends FormRequest
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
            'email' => 'required|email',
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
}
