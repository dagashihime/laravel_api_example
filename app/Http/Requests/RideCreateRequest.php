<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RideCreateRequest extends FormRequest
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
            'citizen_id' => ['required','numeric','exists:citizens,id'],
            'company_id' => ['required','numeric','exists:rides,company_id'],
            'length' => ['required','numeric']
        ];
    }
}
