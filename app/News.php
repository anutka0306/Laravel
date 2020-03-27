<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private static $news = [
       0 => [
           'id'=> 1,
           'title'=> 'News title 1',
           'text' => 'News text 1',
           'cat' => '1'
       ],
       1 => [
           'id'=> 2,
           'title'=> 'News title 2',
           'text' => 'News text 2',
           'cat' => '2'
       ],
    ];

    public static function getNews(){
        return static::$news;
    }
    public static  function changeKeys($arr, $keyProp){
        foreach ($arr as $key=>$value){
            $result[$value[$keyProp]]=$value;
        }
        return $result;
    }

    public static function getNewsId($id){
        $newsResult = self::changeKeys(static::$news, 'id');
        return $newsResult[$id];
    }
}
