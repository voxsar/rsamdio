<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuarterlyReportDPRequest extends FormRequest
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
            'avenue_of_service' => 'required',
            'area_of_focus' => 'required',
            'project_name' => 'required',
            'project_description' => 'required',
            'income' => 'required',
            'expense' => 'required',
            'project_images' => 'required|array|min:1',
            'project_images.*' => 'required',
        ];
    }
}
