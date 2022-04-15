<?php

use Illuminate\Database\Seeder;
use App\Model\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = [
            ['name' => 'Jim Carrey'],
            ['name' => 'Idris Elba'],
            ['name' => 'Michael Keaton'],
            ['name' => 'Matt Smith'],
            ['name' => 'Sam Rockwell'],
            ['name' => 'Robert Pattinson'],
            ['name' => 'Paul Dano'],
            ['name' => 'Tom Holland'],
            ['name' => 'Jake Gyllenhall'],
        ];


        foreach($actors as $actor){
            $new_actor = new Actor();
            $new_actor->fill($actor);
            $new_actor->save();
        }
    }
}
