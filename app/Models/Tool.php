<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'is_free',
        'product_id',
        'view_component',
    ];

    protected $casts = [
        'is_free' => 'boolean',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
