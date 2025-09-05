<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    /** @use HasFactory<\Database\Factories\PlanFactory> */
    use HasFactory;
    
    /** @use SoftDeletes<\Illuminate\Database\Eloquent\SoftDeletes> */
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
    ];

    /**
     * Get the plan's name in uppercase.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
    
            get: fn (string $value) => ucfirst($value),
    
        );
    
    }

    public function scopeFilter(Builder $query, ?string $search) : Builder {
        
        return $query->when($search ?? false, function ($query, $search) {
        
            $query->where('name', 'like', '%' . $search . '%')
        
                ->orWhere('description', 'like', '%' . $search . '%')
            
                ->orWhere('price', 'like', '%' . $search . '%');
        
        });
    }

    public static function getRequiredColumns() : array {
        return [
            'id',
            'name',
            'description',
            'price',
            'status',
        ];
    }

    public static function getRequiredColumnsForSelect() : array {
        return [
            'id',
            'name',
        ];
    }

    public function comboPlans()
    {
        return $this->belongsToMany(ComboPlan::class);
    }
}
