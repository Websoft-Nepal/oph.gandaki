<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewsCategory;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cat_id',
        'link'
    ];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'cat_id');
    }
}
