<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderStatus::create([
           'title' => 'В обработке',
        ]);

        OrderStatus::create([
            'title' => 'Подтвержден',
        ]);

        OrderStatus::create([
            'title' => 'Принят',
        ]);

        OrderStatus::create([
            'title' => 'Курьер едет в пункт A',
        ]);

        OrderStatus::create([
            'title' => 'Груз получен',
        ]);

        OrderStatus::create([
            'title' => 'Курьер едет в пункт B',
        ]);

        OrderStatus::create([
            'title' => 'Груз доставлен',
        ]);

        OrderStatus::create([
            'title' => 'Отменен',
        ]);
    }
}
