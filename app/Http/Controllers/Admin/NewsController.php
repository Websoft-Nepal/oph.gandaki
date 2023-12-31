<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'News - OPH';


        $news = News::with('category')->latest()->simplePaginate(10);
        return view('admin.news.index', compact('title', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add news & event - OPH";

        $news_cats = NewsCategory::all();

        return view('admin.news.create', compact('title', 'news_cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title'     => 'required | min:5 | max:50',
            'photo'     => 'required | mimes:jpg,png,jpeg,pdf',
        ]);

        if($validate)
        {
            $news = new News;
            $news->title = $request->title;
            $news->cat_id = $request->category;
            
            $photo = $request->file('photo');
            $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
            // move photo to folder
            $photo->move(public_path('site/uploads/news/'), $filename);

            $news->link = $filename;

            $news->save();
        }

        return redirect()->route('news.index')->with('status', 'Successfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        File::delete(public_path('site/uploads/news/'.$news->link));
        $news->delete();

        return redirect()->route('news.index')->with('status', 'News successfully deleted!');
    }
}
