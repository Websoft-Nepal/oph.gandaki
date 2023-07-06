<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Gallery - OPH";
        $gallery = Gallery::simplePaginate(10);


        return view('admin.gallery.index', compact('title','gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Photo - OPH';

        return view('admin.gallery.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gallery = new Gallery;

        $validate = $request->validate([
            'title'     => 'required | min:5 | max:150',
            'photo'     => 'required | mimes:jpg,png,jpeg',
        ]);
        if($validate)
        {
            
            $gallery->title = $request->title;

            $photo = $request->file('photo');
            $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
            // move photo to folder
            $photo->move(public_path('site/uploads/gallery/'), $filename);

            $gallery->photo = $filename;

            $gallery->save();
        }

        return redirect()->route('gallery.index')->with('status', 'Photo Added!');
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
        $gallery = Gallery::find($id);
        File::delete(public_path('site/uploads/gallery/'.$gallery->photo));
        $gallery->delete();

        return redirect()->route('gallery.index')->with('status', 'Photo successfully delete!');
    }
}
