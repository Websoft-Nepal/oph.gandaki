<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportShowController extends Controller
{
    public function index()
    {
        $title = "Report";

        $reports = Report::simplePaginate(2);

        return view('reports', compact('title', 'reports'));
    }
}
