<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryPhotoController extends Controller
{
    public function index()
    {
        $title = "Gallery";

        $galleries = Gallery::paginate(10);

        return view('gallery', compact('title','galleries'));
    }
}
