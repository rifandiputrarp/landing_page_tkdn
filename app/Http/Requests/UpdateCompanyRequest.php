<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'email' => ['string', 'email', 'max:255'],
            'business_capital' => ['required', 'string', 'max:255'],
            'npwp' => ['string'],
            'person_in_charge' => ['required', 'string', 'max:255'],
            'phone_in_charge' => ['required', 'string', 'max:255'],
            'npwp_file_path' => 'file|file|max:2048',
            'iui_file_path' => 'file|file|max:2048',
            'others_file_path' => 'file|file|max:2048',
            'status' => ['required', 'string', 'max:255'],
            'note' => ['nullable', 'string'],
            'approved_by' => ['nullable', 'string'],
        ];
    }
}
