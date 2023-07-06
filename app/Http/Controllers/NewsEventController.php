<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsCategory;
use App\Models\News;

class NewsEventController extends Controller
{
    public function index()
    {
        $title = "News and Events - OPH";
        $news = News::with('category')->latest()->paginate(10);

        return view('news', compact('title', 'news'));
    }

    public function show_news_by_cat(string $id)
    {

        $news = News::whereHas('category', function ($query) use ($id) {
            $query->where('id', $id);
        })->paginate(10);

        $news_cat = NewsCategory::find($id);

        $title = $news_cat->category . ' - OPH';

        return view('news_by_category', compact('title', 'news'));
    }
}
