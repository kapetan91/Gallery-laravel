<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class CommentsController extends Controller
{
    public function store($id)
    {
    	$this->validate(request(),
    		[
    			'body' => 'required|min:2|max:1000'
    		]);

    	$image = Image::find($id);
    	$image->addComment(required('body'));

    	return back();
    }
}
