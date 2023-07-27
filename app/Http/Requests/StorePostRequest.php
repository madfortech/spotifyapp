<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'=>[
                'required',
            ],
            [ 
            'avatar' => [
                 'array', 
                 'required',
                 'max:1024000', // 1GB in kilobytes (1GB = 1024MB = 1024 * 1024KB)
                 'mimetypes:video/*', // Accept any video MIME type
                ], 
            ],
            'description'=>[
                'required',
            ], 
        ];
    }
}
