<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'image id'];

    public function postComments()
    {
    	return $this->belongsTo(Image::class);
    }
}
