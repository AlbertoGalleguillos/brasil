<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Photo;

class PhotoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function category($category_name) {
        if ($category_name) {
            $category = Category::where('name', $category_name)->first();
            $photos = Photo::where('category_id', $category->id)->get();
            return view('category', compact('photos'));
        }
    }
}