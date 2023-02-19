<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataMasterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'nim' => ['required', 'string', 'max:255', 'regex:/^(\d{2}.\d{2}.\d{4}|\d{2}\w{2}\d{4})$/i'],
            'prodi' => ['required', 'string', 'max:255'],
            'faculty' => ['required', 'string', 'max:255'],
            'class_year' => ['required', 'digits:4'],
            'graduate_year' => ['required', 'digits:4'],
            'phone' => ['required', 'string', 'max:255'],
        ];
    }
}
