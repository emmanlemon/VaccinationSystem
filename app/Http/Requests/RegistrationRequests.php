<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequests extends FormRequest
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
            'studentNumber' => 'required',
            'tuitionFee' => 'required|numeric',
            'advisingStatus' => 'required',
            'registrationStatus' => 'required',
            'studentType' => 'required',
            'sy' => 'required',
            'section' => 'required',
        ];
    }
}
