<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    private static $categories = [
        0 => [
            'id'=> 1,
            'name' => 'sport'
        ],
        1 => [
            'id'=> 2,
            'name' => 'economic'
        ],
    ];
    public static function getCategories(){
        return static::$categories;
    }
}
