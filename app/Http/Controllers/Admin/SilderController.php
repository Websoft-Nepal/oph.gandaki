<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Slider - OPH';

        $sliders = Slider::orderBy('id', 'desc')
                            ->simplePaginate(3);


        return view('admin.slider.index', compact('title', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $title = 'Create - OPH';

        return view('admin.slider.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'title' => 'required|min:5|max:255',
            'photo' => 'required|mimes:jpg,png,jpeg',
        ]);

        if($validate){
            $slider = new Slider;
            $slider->title = $request->title;
        
            $photo = $request->file('photo');
            $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
            // move photo to folder
            $photo->move(public_path('site/uploads/slider/'), $filename);

            $slider->photo = $filename;

            $slider->save();
        }

        return redirect()->route('slider.index')->with('status', 'Successfully Added!');
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

        $title = "Edit Slider - OPH";

        $slider = Slider::find($id);

        return view('admin.slider.edit', compact('title','slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $slider = Slider::find($id);

        $validate = $request->validate([
            'title' => 'required|min:5|max:255',
        ]);

        if($validate)
        {
            if($request->file('photo'))
            {
                //delete previous photo
                File::delete('site/uploads/slider/'.$slider->photo);

                $slider->title = $request->title;

                $photo = $request->file('photo');
                $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
                // // move photo to folder
                $photo->move(public_path('site/uploads/slider/'), $filename);

                $slider->photo = $filename;

            } else {
                $slider->title = $request->title;
            }
            $slider->update();
        }

        return redirect()->route('slider.index')->with('status', 'Slider successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        File::delete(public_path('site/uploads/slider/'.$slider->photo));
        $slider->delete();

        return redirect()->route('slider.index')->with('status', 'Slider successfully delete!');
    }
}
