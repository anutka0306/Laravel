<?php

namespace App\Http\Controllers;

use App\Categories;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function allNews(){
        return view('news')->with('news', News::getNews());
    }
    public function show($cat,$id){
        return view('new')->with([
        'cat'=>Categories::getNewsCat($cat),
        'news'=> News::getNewsId($id)]);
    }
    public function allCats(){
        return view('category')->with('categories', Categories::getCategories());
    }
    public function catNews($cat){
        return view('news')->with('news', News::getCatNews($cat));
    }
}
