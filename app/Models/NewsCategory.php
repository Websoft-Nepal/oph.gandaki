<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class NewsCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    public function news()
    {
        return $this->hasMany(News::class, 'cat_id');
    }
}
