<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsCategory;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'News Category - OPH';
        $newscategories = NewsCategory::latest()->get();

        return view('admin.newscategory.index', compact('title', 'newscategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Category - OPH';

        return view('admin.newscategory.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'category' => 'required | min:3 | max:30',
        ]);

        if($validate)
        {
            $newscategory = new NewsCategory;

            $newscategory->category = $request->category;

            $newscategory->save();
        }

        return redirect()->route('newscategory.index')->with('status', 'Successfully category added');
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
        $newscategory = NewsCategory::find($id);

        $title = $newscategory->category . ' Edit - OPH';


        return view('admin.newscategory.edit', compact('title', 'newscategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'category' => 'required | min:3 | max:30',
        ]);

        if($validate)
        {
            $newscategory = NewsCategory::find($id);

            $newscategory->category = $request->category;

            $newscategory->update();
        }

        return redirect()->route('newscategory.index')->with('status', 'Category edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newscategory = NewsCategory::find($id);

        $newscategory->delete();

        return redirect()->route('newscategory.index')->with('status', 'category deleted!');

        
    }
}
