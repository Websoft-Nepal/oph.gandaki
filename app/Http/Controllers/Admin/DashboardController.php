<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Leader;


class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard - OPH';
        $news = News::with('category')
                ->limit(3)
                ->latest()
                ->get();

        $leaders = Leader::latest()->get();

        return view('admin.dashboard', compact('title', 'news', 'leaders'));
    }
}
