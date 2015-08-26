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
      'description' => 'HistoryDelphine worked with Dr. Leekie and a group of other scientists at The Dyad Institute, researching and further improving their concept of Neolution. At some point, Delphine developed an intimate relationship with Leekie, though it is indicated that Delphine was uncomfortable with it.
work in progressSeason 1While studying the blood samples of her clones, Cosima notices Delphine upset with someone on the phone and watches her momentarily until Delphine leaves. Cosima then follows her to return the grade sheet she had left behind and finds her crying. Cosima compliments her on having killer grades, and the schoolmates properly introduce each other. The two hit it off, however, as Delphine explains that she had just broken up with her long-distance lover and they discuss their courses.
In Variations Under Domestication, Cosima runs into Delphine in the library, spurred on by boredom Cosima puts down her books and strikes up a conversation with Delphine. Delphine says she plans on attending a lecture by Dr Aldous Leekie later the afternoon and she invites Cosima to join her. Although initially hesitant, Cosima agrees to attend. After the lecture Cosima and Delphine are enjoying wine while discussing Neolution, Delphine spots Leekie and rushes over to talk to him. She urges Cosima to join her. What follows is a tense conversation and an invtation by Leekie for the two women to learn more about the Dyad Institute. After he leaves, Delphine tells Cosima You are such a brat! to which Cosima responds by stealing some of the complimentary wine. She hands a bottle to Delphine and says Lets get out of here. They run across campus with the stolen wine as Cosima makes more rebellious suggestions (claiming that she will get Delphine baked on marijuana) but Delphine declines, stating she has class. She bids farewell with two kisses on the cheek. Cosima is obviously very taken with Delphine.
Later in this episode Delphine enters a hotel room, dressed to the nines. A man approaches her from inside the room, speaking in French. The man is revealed to be Dr. Leekie, who then starts kissing her neck. When her face is turned away from him, she looks uncomfortable.
Great serie',
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
    'description' => 'HistoryDelphine worked with Dr. Leekie and a group of other scientists at The Dyad Institute, researching and further improving their concept of Neolution. At some point, Delphine developed an intimate relationship with Leekie, though it is indicated that Delphine was uncomfortable with it.
work in progressSeason 1While studying the blood samples of her clones, Cosima notices Delphine upset with someone on the phone and watches her momentarily until Delphine leaves. Cosima then follows her to return the grade sheet she had left behind and finds her crying. Cosima compliments her on having killer grades, and the schoolmates properly introduce each other. The two hit it off, however, as Delphine explains that she had just broken up with her long-distance lover and they discuss their courses.
In Variations Under Domestication, Cosima runs into Delphine in the library, spurred on by boredom Cosima puts down her books and strikes up a conversation with Delphine. Delphine says she plans on attending a lecture by Dr Aldous Leekie later the afternoon and she invites Cosima to join her. Although initially hesitant, Cosima agrees to attend. After the lecture Cosima and Delphine are enjoying wine while discussing Neolution, Delphine spots Leekie and rushes over to talk to him. She urges Cosima to join her. What follows is a tense conversation and an invtation by Leekie for the two women to learn more about the Dyad Institute. After he leaves, Delphine tells Cosima You are such a brat! to which Cosima responds by stealing some of the complimentary wine. She hands a bottle to Delphine and says Lets get out of here. They run across campus with the stolen wine as Cosima makes more rebellious suggestions (claiming that she will get Delphine baked on marijuana) but Delphine declines, stating she has class. She bids farewell with two kisses on the cheek. Cosima is obviously very taken with Delphine.
Later in this episode Delphine enters a hotel room, dressed to the nines. A man approaches her from inside the room, speaking in French. The man is revealed to be Dr. Leekie, who then starts kissing her neck. When her face is turned away from him, she looks uncomfortable.
Great serie',
    'director' => 'Ted'
    ]);
  }
}
