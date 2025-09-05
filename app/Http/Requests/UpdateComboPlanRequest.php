<?php

namespace App\Http\Requests;

use App\Enums\ComboPlanStatus;
use Illuminate\Foundation\Http\FormRequest;

class UpdateComboPlanRequest extends FormRequest
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
            
            'name' => 'required|string|min:3|max:100|unique:combo_plans,name,' . $this->route('combo_plan')->id, // exclude current combo plan
            
            'description' => 'nullable|string|max:500',
            
            'price' => 'required|numeric|min:0|max:999',
            
            'plans' => 'required|array',
            
            'plans.*' => 'required|exists:plans,id',
        
            'status' => 'required|in:' . ComboPlanStatus::ACTIVE->value . ',' . ComboPlanStatus::INACTIVE->value,
        ];
    }
}
