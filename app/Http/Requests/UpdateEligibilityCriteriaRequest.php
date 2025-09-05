<?php

namespace App\Http\Requests;

use App\Enums\EligibilityCriteriaStatus;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEligibilityCriteriaRequest extends FormRequest
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
            
            'name' => 'required|string|min:3|max:100|unique:eligibility_criterias,name,' . $this->eligibilityCriteria->id, // exclude current eligibility criteria
            
            'description' => 'nullable|string|max:500',
            
            'age_less_than' => 'required|integer|min:0|max:100',
            
            'age_greater_than' => 'required|integer|min:0|max:100',
            
            'last_login_days_ago' => 'required|integer|min:0|max:365',
            
            'income_less_than' => 'required|integer|min:0|max:999',
            
            'income_greater_than' => 'required|integer|min:0|max:999',
        
            'status' => 'required|in:' . EligibilityCriteriaStatus::ACTIVE->value . ',' . EligibilityCriteriaStatus::INACTIVE->value,
        ];
    }
}
