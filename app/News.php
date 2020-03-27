<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private static $news = [
       1 => [
           'id'=> 1,
           'title'=> 'News title 1',
           'text' => 'News text 1',
           'cat' => 'sport'
       ],
       2 => [
           'id'=> 2,
           'title'=> 'News title 2',
           'text' => 'News text 2',
           'cat' => 'sport'
       ],
    ];

    public static function getNews(){
        return static::$news;
    }
    public static function getNewsId($id){
        foreach (static::$news as $news){
            if($news['id']==$id){
                return $news;
            }
        }
    }
}
