<?php

namespace nuevo;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Serie extends Model implements SluggableInterface
{
  use SluggableTrait;

   protected $sluggable = [
       'build_from' => 'serie',
       'save_to'    => 'slug',
   ];
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'series';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['serie', 'main_actors', 'actors','genre', 'photo', 'description', 'director'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
