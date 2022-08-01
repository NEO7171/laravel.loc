<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //  protected $table = 'name_table'; -явное указание названия таблицы если отличается
    // protected $primaryKey = 'post_id'; явное указание поля первичного ключа если не ID
  //  public $incrementing = false; отключение автоинкремента у первичного ключя
   // protected $keyType = 'string'; даем знать, что primaryKey является строкой
 //  public $timestamps = false;  отключение автозаполнения created_at и updated_at
   // автоматическое зпролнение поля content
    protected $attributes=[
    'content'=>'Lorem ipsum....2'
    ];
}
