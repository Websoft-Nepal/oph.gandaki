<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiefMsg;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ChiefMsgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Chief Message - OPH";

        $chiefmsgs = ChiefMsg::latest()->simplePaginate(10);

        return view('admin.chiefmsg.index', compact('title', 'chiefmsgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Chief Message - OPH";

        return view('admin.chiefmsg.create', compact('title'));
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
            $chiefmsg = new ChiefMsg;
            $chiefmsg->title = $request->title;
            
            $photo = $request->file('photo');
            $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
            // move photo to folder
            $photo->move(public_path('site/uploads/chiefmsg/'), $filename);

            $chiefmsg->link = $filename;

            $chiefmsg->save();
        }

        return redirect()->route('chiefmsg.index')->with('status', 'Successfully Added!');
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
        $chiefmsg = ChiefMsg::find($id);
        File::delete(public_path('site/uploads/chiefmsg/'.$chiefmsg->link));
        $chiefmsg->delete();

        return redirect()->route('chiefmsg.index')->with('status', 'Successfully delete!');
    }
}
