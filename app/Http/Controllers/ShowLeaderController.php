<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;

class ShowLeaderController extends Controller
{
    public function index(string $id)
    {
        $leader = Leader::where('id', $id)->first();
        $title = $leader->name . ' - Profile - OPH';

        return view('leaders.show', compact('title','leader'));
    }
}
