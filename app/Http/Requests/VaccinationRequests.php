<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccinationRequests extends FormRequest
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
            'vaccinated' => 'required',
            'brand' => 'required',
            'firstDose' => 'required',
            'provider1' => 'required',
            'secondDose' => 'required',
            'provider2' => 'required',
            'booster' => 'required',
            'provider3' => 'required',
            'boosterDate' => 'required',
            'reason' => 'required',
        ];
    }
   
    
}
