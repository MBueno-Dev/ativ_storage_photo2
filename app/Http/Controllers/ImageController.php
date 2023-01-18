<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->photo11->storeAs('/public/images', 'file1.jpg');
        $request->photo22->storeAs('/public/images', 'file2.jpg');
    }
}
