<?php

use Illuminate\Support\Facades\Route;
use App\Models\CatImage;

Route::get('/', function () {
    $cats = CatImage::all();
    return view('catgallery', compact('cats'));
});
