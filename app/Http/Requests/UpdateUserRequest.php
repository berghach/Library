<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
                'first_name' => ['required','string','max:255'],
                'last_name' => ['required','string','max:255'],
                'email' => ['required','email','unique:users,email'],
                'phone' => ['required','string','min:10','max:15','regex:/^[0-9]+$/'],
                'password' => ['required','string','min:8','confirmed']
            ];
        }else{
            return [
                'first_name' => ['sometimes','required','string','max:255'],
                'last_name' => ['sometimes','required','string','max:255'],
                'email' => ['sometimes','required','email','unique:users,email'],
                'phone' => ['sometimes','required','string','min:10','max:15','regex:/^[0-9]+$/'],
                'password' => ['sometimes','required','string','min:8','confirmed']
            ];
    
        }
    }
}
