<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = Auth::user()->name . ' Profile Edit';

        return view('admin.profile.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required | string | min:3 | max:30',
            'email' => 'required | string | email | max:255',
        ]);
        if($validate)
        {
            $user = User::find(Auth::user()->id);

            $user->name = $request->name;
            $user->email = $request->email;
            

            if($request->password)
            {
                $user->password = Hash::make($request->password);
            }
            

            if($request->file('photo'))
            {
                $photo = $request->file('photo');
                $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
                // move photo to folder
                $photo->move(public_path('site/uploads/admin/'), $filename);

                $user->photo = $filename;
            }

            $user->save();
        }
        return redirect()->route('profile.index')->with('status', 'Successfully Update!');
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
        //
    }
}
