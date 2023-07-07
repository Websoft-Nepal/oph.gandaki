<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;
use App\Models\ChiefMsg;

class ChiefController extends Controller
{
    public function chief_details()
    {

        $title = "प्रदेश प्रमुख Details - OPH";

        $leader = Leader::where('position', 'प्रदेश प्रमुख')->first();


        // return $leader;
        return view('chief.chief_details', compact('title','leader'));
    }

    public function chief_message()
    {

        $title = "प्रदेश प्रमुख Message - OPH";

        $chief_msgs = ChiefMsg::paginate(10);

        // return $chief_msg;
        return view('chief.chief_message', compact('title', 'chief_msgs'));
    }
}
