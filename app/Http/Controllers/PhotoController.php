<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Photo;

class PhotoController extends Controller {
    
    public function index() {
        $categories = Category::all();
        //dd($categories);
        return view('index', compact('categories'));
    }

    public function category($category_name) {
        $category = Category::where('name', $category_name)->first();
        $photos = Photo::where('category_id', $category->id)->get();
        //dd($photos);
        return view('category', compact('photos'));
    }
}