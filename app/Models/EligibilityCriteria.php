<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EligibilityCriteria extends Model
{
    /** @use HasFactory<\Database\Factories\EligibilityCriteriaFactory> */
    use HasFactory;

    /** @use SoftDeletes<\Illuminate\Database\Eloquent\SoftDeletes> */
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'age_less_than',
        'age_greater_than',
        'last_login_days_ago',
        'income_less_than',
        'income_greater_than',
        'status',
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
    
            get: fn (string $value) => ucfirst($value),
    
        );
    
    }

    public function scopeFilter(Builder $query, ?string $search) : Builder {
        
        return $query->when($search ?? false, function ($query, $search) {
        
            $query->where('name', 'like', '%' . $search . '%')
        
                ->orWhere('description', 'like', '%' . $search . '%');
        
        });
    }

    public static function getRequiredColumns() : array {
        return [
            'id',
            'name',
            'description',
            'age_less_than',
            'age_greater_than',
            'last_login_days_ago',
            'income_less_than',
            'income_greater_than',
            'status',
        ];
    }
}
