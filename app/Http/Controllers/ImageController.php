<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->photo1->storeAs('/public/images', 'image1.jpg');
        $request->photo2->storeAs('/public/images', 'image2.jpg');
    }
}
