<?php
use App\Models\CatImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/cats', function (Request $request) {
    if ($request->has('tag')) {
        return CatImage::whereJsonContains('tags', $request->tag)->get();
    }
    return CatImage::all();
});

