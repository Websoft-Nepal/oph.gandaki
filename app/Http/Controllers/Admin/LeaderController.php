<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leader;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Leaders - OPH';

        $leaders = Leader::all();

        return view('admin.leaders.index', compact('title', 'leaders'));
        // return $leaders;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $title = 'Add New Leader - OPH';

        return view('admin.leaders.create', compact('title'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validate = $request->validate([
            'name' => 'required | min:5 | max:30',
            'position' => 'required',
            'birthday' => 'required',
            'photo' => 'required | mimes:jpg,png,jpeg',
        ]);

        if($validate)
        {
            $leader = new Leader;
            $leader->name = $request->name;
            $leader->position = $request->position;
            $leader->birthday = $request->birthday;
            $leader->birth_place = $request->birth_place;
            $leader->father_name = $request->father_name;
            $leader->mother_name = $request->mother_name;
            $leader->contact_no = $request->contact_no;
            $leader->email = $request->email;
            $leader->qualification = $request->qualification;
            $leader->work_exp = $request->work_exp;
            $leader->political_affairs = $request->political_affairs;
            $leader->lang = $request->lang;
            $leader->travel_abroad = $request->travel_abroad;

            $photo = $request->file('photo');
            $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
            // move photo to folder
            $photo->move(public_path('site/uploads/leader/'), $filename);

            $leader->photo = $filename;

            $leader->save();

        }
        return redirect()->route('leaders.index')->with('status', 'Successfully Added!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $leader = Leader::find($id);
        $title = $leader->name . '- OPH';


        return view('admin.leaders.show', compact('title', 'leader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $leader = Leader::find($id);
        $title = $leader->name . ' Edit - OPH';

        return view('admin.leaders.edit', compact('title', 'leader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $leader = Leader::find($id);

        $validate = $request->validate([
            'name' => 'required | min:5 | max:30',
            'position' => 'required',
            'birthday' => 'required',
        ]);

        if($validate)
        {
            if($validate)
            {
                $leader->name = $request->name;
                $leader->position = $request->position;
                $leader->birthday = $request->birthday;
                $leader->birth_place = $request->birth_place;
                $leader->father_name = $request->father_name;
                $leader->mother_name = $request->mother_name;
                $leader->contact_no = $request->contact_no;
                $leader->email = $request->email;
                $leader->qualification = $request->qualification;
                $leader->work_exp = $request->work_exp;
                $leader->political_affairs = $request->political_affairs;
                $leader->lang = $request->lang;
                $leader->travel_abroad = $request->travel_abroad;

                if($request->file('photo'))
                {
                    //delete previous photo
                    File::delete('site/uploads/leader/'.$leader->photo);

                    $photo = $request->file('photo');
                    $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
                    // // move photo to folder
                    $photo->move(public_path('site/uploads/leader/'), $filename);

                    $leader->photo = $filename;

                }
                $leader->update();
            }
        }

        return redirect()->route('leaders.index')->with('status', 'Successfully Edited!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leader = Leader::find($id);
        File::delete(public_path('site/uploads/leader/'.$leader->photo));
        $leader->delete();

        return redirect()->route('leaders.index')->with('status', 'leader successfully delete!');
    }
}
