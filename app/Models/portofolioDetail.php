<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class portofolioDetail extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'description',
        'image_cover',
        'image_detail'
    ];
    protected $casts = [
        'image_detail' => 'array',
    ];
    public function portofolio_categories():BelongsToMany
    {
        return $this->belongsToMany(portofolioCategory::class,'portofolio_category_and_detail');
    }
    public function list_tools()
    {
        return $this->belongsToMany(tool::class,'portofolio_category_and_tool');
    }
}
