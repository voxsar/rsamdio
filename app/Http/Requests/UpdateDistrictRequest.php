<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDistrictRequest extends FormRequest
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
            
            /*
            'drremail' => 'email',
            'drrpassword' => 'min:8|confirmed',
            'drsemail' => 'email',
            'drspassword' => 'min:8|confirmed',*/
        ];
    }
}
