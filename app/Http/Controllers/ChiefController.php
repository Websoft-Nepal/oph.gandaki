<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;
use App\Models\ChiefMsg;

class ChiefController extends Controller
{
    public function chief_details()
    {
        $leader = Leader::where('position', 'प्रदेश प्रमुख')->get();


        return $leader;
        // return view('chief.chief_details');
    }

    public function chief_message()
    {
        $chief_msg = ChiefMsg::all();

        return $chief_msg;
    }
}
