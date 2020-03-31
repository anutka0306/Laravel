<?php

namespace App\Http\Controllers;

use App\Categories;
use App\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('news.categories')->with('categories', Categories::getCategories());
    }
    public function show($name){
        return view('news.category')->with([
            'news'=> News::getNewsByCategoryName($name),
            'category_name'=> $name,
                ]
        );
    }
}
