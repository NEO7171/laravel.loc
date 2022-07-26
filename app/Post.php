<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */
class Post extends Model
{
    //  protected $table = 'name_table'; -явное указание названия таблицы если отличается
    // protected $primaryKey = 'post_id'; явное указание поля первичного ключа если не ID
    //  public $incrementing = false; отключение автоинкремента у первичного ключя
    // protected $keyType = 'string'; даем знать, что primaryKey является строкой
    //  public $timestamps = false;  отключение автозаполнения created_at и updated_at
    // автоматическое зпролнение поля content
//    protected $attributes=[
//    'content'=>'Lorem ipsum....2'
//    ];
    protected $fillable = ['title', 'content', 'rubric_id'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate()
    {
        $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        $formatter->setPattern('d MMM y');
        return $formatter->format(new \DateTime($this->created_at));
        //  return Carbon::parse($this->created_at)->diffForHumans();
    }
    // пишем мутатор (меняет данные перед тем как записать в БД)
    public function setTitleAttribute($value)
    {
      //  dd($value);
        // делаем в тайтле первые буквы заглавными
        $this->attributes['title'] = Str::title($value);
    }
    // пишем аксессор (меняет данные полученные из БД перед тем как вывести)
    public function getTitleAttribute($value)
    {
        return Str::upper($value);
    }
}
