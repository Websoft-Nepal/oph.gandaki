<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Staff - OPH';

        $staffs = Staff::latest()->simplePaginate(3);

        return view('admin.staff.index', compact('title', 'staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $title = 'Add Staff - OPH';

        return view('admin.staff.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'      => 'required | min:5 | max:30',
            'post'      => 'required | min:5 | max:30',
            'section'   => 'required | min:5 | max:30',
            'mobile'    => 'required | min:5 | max:30',
            'photo'     => 'required | mimes:jpg,png,jpeg',
        ]);

        if($validate)
        {
            $staff = new Staff;

            $staff->name       = $request->name;
            $staff->post       = $request->post;
            $staff->section    = $request->section;
            $staff->mobile     = $request->mobile;

            $photo = $request->file('photo');
            $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
            // move photo to folder
            $photo->move(public_path('site/uploads/staff/'), $filename);

            $staff->photo = $filename;

            $staff->save();
        }
        
        return redirect()->route('staff.index')->with('status', 'Staff Successfully Added!');
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
        $staff = Staff::find($id);

        $title = $staff->name . ' - ' . 'Edit Staff - OPH';

        return view('admin.staff.edit', compact('title','staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         
        $staff = Staff::find($id);

        $validate = $request->validate([
            'name'      => 'required | min:5 | max:30',
            'post'      => 'required | min:5 | max:30',
            'section'   => 'required | min:5 | max:30',
            'mobile'    => 'required | min:5 | max:30',
        ]);

        if($validate)
        {
            $staff->name = $request->name;
            $staff->post = $request->post;
            $staff->section = $request->section;
            $staff->mobile = $request->mobile;

            if($request->file('photo'))
            {
                //delete previous photo
                File::delete('site/uploads/staff/'.$staff->photo);

                $photo = $request->file('photo');
                $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
                // // move photo to folder
                $photo->move(public_path('site/uploads/staff/'), $filename);

                $staff->photo = $filename;

            }
            $staff->update();
        }

        return redirect()->route('staff.index')->with('status', 'Successfully Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff = Staff::find($id);
        File::delete(public_path('site/uploads/staff/'.$staff->photo));
        $staff->delete();

        return redirect()->route('staff.index')->with('status', 'Staff successfully delete!');
    }
}
