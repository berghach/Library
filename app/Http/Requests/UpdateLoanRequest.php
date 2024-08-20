<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLoanRequest extends FormRequest
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
        if($this->method() == 'PUT'){
            return [
                'loan_date' => ['required','date','before_or_equal:return_date'],
                'return_date' => ['required','date','after_or_equal:loan_date'],
                'duration' => ['required','integer','min:1'],
            ];
        }else{
            return [
                'loan_date' => ['sometimes', 'required','date','before_or_equal:return_date'],
                'return_date' => ['sometimes', 'required','date','after_or_equal:loan_date'],
                'duration' => ['sometimes', 'required','integer','min:1'],
            ];    
        }
    }
}
