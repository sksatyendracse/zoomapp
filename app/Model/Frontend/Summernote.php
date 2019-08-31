<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;

class Summernote extends Model
{
    protected $table = 'pages';

    public static function getData($id){
        return self::find($id);;
    }
}
