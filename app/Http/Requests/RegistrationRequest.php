<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegistrationRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required',
            'gender' => 'nullable|in:Male,Female,Other',
            'email' => 'required|email|unique:users,email',
            'level' => 'nullable|in:1,2,3,4',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'gender.in' => 'Invalid gender value. It should be Male, Female, or Other.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already registered.',
            'level.in' => 'Invalid level value. It should be 1, 2, 3, or 4.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'confirm_password.required' => 'The confirm password field is required.',
            'confirm_password.min' => 'The confirm password must be at least 8 characters.',
            'confirm_password.same' => 'The confirm password and password must match.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->toArray();
        $message = 'Validation error.';

        if (count($errors) > 1) {
            $message .= ' (' . count($errors) . ' more errors)';
        }

        throw new HttpResponseException(response()->json([
            'message' => $message,
            'errors' => $errors
        ], 200));
    }
}
