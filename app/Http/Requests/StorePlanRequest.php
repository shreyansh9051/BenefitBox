<?php

namespace App\Http\Requests;

use App\Enums\PlanStatus;
use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
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
            
            'name' => 'required|string|min:3|max:100|unique:plans,name',
            
            'description' => 'nullable|string|max:500',
            
            'price' => 'required|numeric|min:0|max:999',
        
            'status' => 'required|in:' . PlanStatus::ACTIVE->value . ',' . PlanStatus::INACTIVE->value,
        ];
    }
}
