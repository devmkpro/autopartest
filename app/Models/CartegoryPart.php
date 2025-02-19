<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartegoryPart extends Model
{
    protected $table = 'cartegory_parts';

    protected $fillable = [
        'category_id',
        'part_id',
    ];

    /**
     * Get the category that owns the CartegoryPart
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the part that owns the CartegoryPart
     */
    public function part(): BelongsTo
    {
        return $this->belongsTo(Part::class);
    }
}
