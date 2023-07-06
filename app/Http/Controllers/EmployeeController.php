<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class EmployeeController extends Controller
{
    public function index()
    {
        $title = "Staff - OPH";
        $staffs = Staff::all();

        return view('staffs', compact('title', 'staffs'));
    }
}
