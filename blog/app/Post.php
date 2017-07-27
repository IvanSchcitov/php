<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $table = "posts"; //ручная привязка к табличке в БД
//    protected $primaryKey = 'my_id'; //вручную задать уникальный ключ таблицы, если он id поумолчанию
    protected $fillable = ['title', 'alias', 'intro', 'body'];
//    public function getRouteKeyName(){
//        return 'alias';
//    }
}
