<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Reports - OPH";

        $reports = Report::latest()->simplePaginate(10);

        return view('admin.reports.index', compact('title', 'reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Report";

        return view('admin.reports.create', compact('title'));
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
            $report = new Report;
            $report->title = $request->title;
            
            $photo = $request->file('photo');
            $filename = Str::uuid()->toString() . '-' . time() . '.' . $photo->getClientOriginalExtension();
            // move photo to folder
            $photo->move(public_path('site/uploads/report/'), $filename);

            $report->link = $filename;

            $report->save();
        }

        return redirect()->route('reports.index')->with('status', 'Successfully Added!');
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
        
        $report = Report::find($id);
        File::delete(public_path('site/uploads/report/'.$report->link));
        $report->delete();

        return redirect()->route('reports.index')->with('status', 'Report successfully deleted!');
    }
}
