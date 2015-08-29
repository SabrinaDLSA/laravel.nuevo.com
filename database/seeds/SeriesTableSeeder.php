<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use nuevo\Serie;

class SeriesTableSeeder extends Seeder{
  public function run(){
    Serie::create(
    [
      'Name'=>'Pretty Little Liars',
      'Photo'=> 'https://images.unsplash.com/photo-1436831135709-48bdc150cce5?q=80&fm=jpg&s=3e7350350dd27f7d9b67256fd90073f5'
      ]);

  Serie::create(
  [
    'Name'=>'Xena Warrior Princess',
    'Photo' => 'https://images.unsplash.com/photo-1437075130536-230e17c888b5?q=80&fm=jpg&s=9b73917f45dd1bed866904833e297478'
    ]);
  }
}
