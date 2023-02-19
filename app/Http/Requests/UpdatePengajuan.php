<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePengajuan extends FormRequest
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
            'product_qty.*' => ['nullable', 'string', 'max:255'],
            'name.*' => ['nullable', 'string', 'max:255'],
            'attachment_path.*' => 'file|file|max:2048',
            'sertificate_path' => 'file|file|max:2048',
        ];
    }
}
