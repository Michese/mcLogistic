<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Event $model)
    {
        Event::create([
            'title' => 'Акция №1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam consequuntur eius et inventore minima mollitia numquam quidem repellendus voluptatibus.'
        ]);

        Event::create([
            'title' => 'Акция №2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam consequuntur eius et inventore minima mollitia numquam quidem repellendus voluptatibus.'
        ]);

        Event::create([
            'title' => 'Акция №3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam consequuntur eius et inventore minima mollitia numquam quidem repellendus voluptatibus.'
        ]);
    }
}
