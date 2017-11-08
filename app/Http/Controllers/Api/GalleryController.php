<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
    	return Gallery::all();
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
