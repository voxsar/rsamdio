<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDistrictRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'district_number' => 'required',
            'drr_name' => 'required',
            'drs_name' => 'required',
            'description' => 'required',

            'drremail' => 'required|email|unique:users,email',
            'drrpassword' => 'required|min:8|confirmed',
            'drsemail' => 'required|email|unique:users,email',
            'drspassword' => 'required|min:8|confirmed',

        ];
    }
}
