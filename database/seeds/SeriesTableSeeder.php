<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use nuevo\Serie;

class SeriesTableSeeder extends Seeder{
  public function run(){
    Serie::create(
    [
      'serie'=>'Pretty Little Liars',
      'main_actors' => 'Shay M, Lucy H, Ashley B',
      'actors' => 'none',
      'genre' => 'Drama',
      'photo' => 'https://images.unsplash.com/photo-1437240443155-612416af4d5a?fit=crop&fm=jpg&q=80&w=1050',
      'start' => '20-10-2009',
      'finish' => '00-00-00',
      'description' => 'Great serie',
      'director' => 'Shonda'
    ]);

  Serie::create(
  [
    'serie'=>'Xena Warrior Princess',
    'main_actors' => 'Lucy Lawless, Renee O Connor',
    'actors' => 'Sam Raimi',
    'genre' => 'Adventure',
    'photo' => 'https://images.unsplash.com/photo-1436891678271-9c672565d8f6?fit=crop&fm=jpg&q=80&w=1050',
    'start' => '20-1-1995',
    'finish' => '20-1-2001',
    'description' => 'Great serie',
    'director' => 'Ted'
    ]);
  }
}
