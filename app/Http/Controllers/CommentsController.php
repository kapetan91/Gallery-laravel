<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Gallery;
use App\Comment;

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

    public function create()
    {

    }

    public function show(Comment $comment)
    {

    }

    public function edit(Comment $comment)
    {

    }

    public function update(Request $request, Comment $comment)
    {

    }

    public function destroy(Comment $comment)
    {
        
    }
}
