<?php

namespace Database\Seeders;

use App\Models\Access;
use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Access::create([
            'title' => 'Клиент'
        ]);

        Access::create([
            'title' => 'Штатный курьер'
        ]);

        Access::create([
            'title' => 'Нештатный курьер'
        ]);

        Access::create([
            'title' => 'Менеджер'
        ]);

        Access::create([
            'title' => 'Администратор'
        ]);
    }
}
