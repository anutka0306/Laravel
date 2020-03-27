<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function allNews(){
        return view('news')->with('news', News::getNews());
    }
    public function show($id){
        return view('new')->with('news', News::getNewsId($id));
    }
}
