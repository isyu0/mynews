<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

/*Laravel14課題5　Modelを作成するコマンドで Profile というModelを作成し、
名前(name)、性別(gender)、趣味(hobby)、自己紹介(introduction)に対してValidationをかけるようにしてみましょう。*/
   
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
}
