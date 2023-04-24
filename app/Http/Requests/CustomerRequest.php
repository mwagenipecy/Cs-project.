<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
//            'customer_name' => 'required|string|min:3',
//            'customer_email' => 'required|email|unique:customers',
//            'customer_phone' => 'required|string|min:9|numeric',
        ];
    }
}
