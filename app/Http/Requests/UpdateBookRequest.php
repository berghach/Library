<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
                'title' => ['required','string','max:255'],
                'author' => ['required','string','max:255'],
                'publish_year' => ['required','integer','digits:4','min:1000','max:' . date('Y')],
                'genre' => ['required','string','max:100'],
                'available_quantity' => ['required','integer','min:0'],
            ];
        }else{
            return [
                'title' => ['sometimes', 'required','string','max:255'],
                'author' => ['sometimes', 'required','string','max:255'],
                'publish_year' => ['sometimes', 'required','integer','digits:4','min:1000','max:' . date('Y')],
                'genre' => ['sometimes', 'required','string','max:100'],
                'available_quantity' => ['sometimes', 'required','integer','min:0'],
            ];
        }
    }
}
