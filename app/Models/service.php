<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    /**
     * Cast the description field as an array.
     */
    protected $casts = [
        'description' => 'array',  // This ensures that description is handled as an array
    ];
}
