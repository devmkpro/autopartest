<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'uuid';

    public $incrementing = false;
    
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The parts that belong to the Category
     */
    public function parts(): BelongsToMany
    {
        return $this->belongsToMany(Part::class, 'category_parts');
    }
}
