<?php

namespace App\Models;

use App\HasPartNumberTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Part extends Model
{
    use HasFactory, HasPartNumberTrait, HasUuids;

    protected $primaryKey = 'uuid';
    
    public $incrementing = false;
    
    protected $fillable = [
        'name',
        'part_number',
        'description',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    /**
     * Get the categories associated with the part.
     */
    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_part');
    }

     /**
     * Generate random and unique part_number for the class
     */
    public function generatePartNumber() : string
    {
        $partNumber = strtoupper(substr(md5(uniqid()), 0, 10));
        if (self::where('part_number', $partNumber)->exists()) {
            return $this->generatePartNumber();
        }
        return $partNumber;
    }
}
