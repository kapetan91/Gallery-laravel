<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Image;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
    	return Gallery::with('user')->get();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
    	return Gallery::create($request->all());
    }

    public function edit(Gallery $gallery)
    {

    }

    public function update(Request $request, Gallery $gallery)
    {

    }

    public function destroy(Gallery $gallery)
    {

    }
}
