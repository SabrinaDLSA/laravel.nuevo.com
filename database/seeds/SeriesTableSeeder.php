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
      'description' => 'Xena is a fictional character from Robert Taperts Xena: Warrior Princess franchise. She first appeared in the 1995–1999 television series Hercules: The Legendary Journeys, before going on to appear in Xena: Warrior Princess TV show and subsequent comic book of the same name. The Warrior Princess has also appeared in the spin-off animated movie The Battle for Mount Olympus, as well as numerous non-canon expanded universe material, such as books and video games. Xena was played by New Zealand actress Lucy Lawless, who commonly wore a tight leather skirted outfit overlaid with metal armor.

Xena is the protagonist of the story, and the series depicts her on a quest to redeem herself for her dark past by using her formidable fighting skills to help people. Xena was raised as the daughter of Cyrene and Atrius in Amphipolis, though the episode The Furies raised the possibility that Ares might be Xenas biological father, but it is never pursued further. She had two brothers, the younger of who is dead; she visits his grave to speak with him in Sins of the Past. In Hercules: The Legendary Journeys, during her two first episodes, Xena was a villain, but in the third episode she appears in, she joins Hercules to defeat Darphus, who had taken her army. Aware that the character of Xena had been very successful with the public in the three Hercules: The Legendary Journeys episodes, the producers of the series decided to create a spin-off series based on her adventures. Later in Xena: Warrior Princess she is joined by Gabrielle, a small town bard. Together they go up against ruthless warlords and Gods in the ancient mythological world.

The character Gabrielle, introduced in the first episode, becomes Xenas greatest ally and best friend; her initial naïveté helps to balance Xena and assists her in recognizing and pursuing the greater good.',
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
    'description' => 'Xena is a fictional character from Robert Taperts Xena: Warrior Princess franchise. She first appeared in the 1995–1999 television series Hercules: The Legendary Journeys, before going on to appear in Xena: Warrior Princess TV show and subsequent comic book of the same name. The Warrior Princess has also appeared in the spin-off animated movie The Battle for Mount Olympus, as well as numerous non-canon expanded universe material, such as books and video games. Xena was played by New Zealand actress Lucy Lawless, who commonly wore a tight leather skirted outfit overlaid with metal armor.

Xena is the protagonist of the story, and the series depicts her on a quest to redeem herself for her dark past by using her formidable fighting skills to help people. Xena was raised as the daughter of Cyrene and Atrius in Amphipolis, though the episode The Furies raised the possibility that Ares might be Xenas biological father, but it is never pursued further. She had two brothers, the younger of who is dead; she visits his grave to speak with him in Sins of the Past. In Hercules: The Legendary Journeys, during her two first episodes, Xena was a villain, but in the third episode she appears in, she joins Hercules to defeat Darphus, who had taken her army. Aware that the character of Xena had been very successful with the public in the three Hercules: The Legendary Journeys episodes, the producers of the series decided to create a spin-off series based on her adventures. Later in Xena: Warrior Princess she is joined by Gabrielle, a small town bard. Together they go up against ruthless warlords and Gods in the ancient mythological world.

The character Gabrielle, introduced in the first episode, becomes Xenas greatest ally and best friend; her initial naïveté helps to balance Xena and assists her in recognizing and pursuing the greater good.',
    'director' => 'Ted'
    ]);
  }
}
