<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatImage extends Model
{
    protected $table = 'cat_images';

    protected $fillable = ['_id', 'mimetype', 'size', 'tags'];

    protected $casts = [
        'tags' => 'json',
    ];
}
