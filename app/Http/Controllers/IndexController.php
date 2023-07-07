<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\NewsCategory;
use App\Models\News;

class IndexController extends Controller
{
    public function index()
    {
        $title = "Home - OPH";

        //getting slider
        $sliders = Slider::where('status', '0')->get();

        //getting categories
        $news_cats = NewsCategory::all();

        //getting news
        $news = News::all();

        // return $news;
        return view('index', compact('title', 'sliders', 'news_cats', 'news'));
    }
}
