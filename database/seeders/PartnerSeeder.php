<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($count= 1; $count < 4; $count++) {
            Partner::create([
                'title' => 'Партнер №' . $count,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam consequuntur eius et inventore minima mollitia numquam quidem repellendus voluptatibus.',
            ]);
        }

    }
}
