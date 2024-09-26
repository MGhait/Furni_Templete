<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|min:5',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages():array
    {
        return [
            'first_name.required' => 'First Name Field is Required MAN!!',
            'last_name.required' => 'Last Name Field is Required MAN!!',
            'email.required' => 'Email Field is Required MAN!!',
            'email.email' => 'Write A Valid Email Address IDIOT !',
            'message.min' => 'COME ON This Is Too Short To Be A Message !',
        ];
    }
}
