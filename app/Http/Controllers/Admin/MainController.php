<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class MainController extends Controller
{
    
    public function index() {
        $postCount = Post::all()->count();
        $categoriesCount = Category::all()->count();
        return view('admin.index', compact('postCount', 'categoriesCount'));
    }

}
