<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;

class Image extends Model
{
    protected $fillable = ['name', 'description', 'image_url','gallery_id'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
