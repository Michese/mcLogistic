<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'title' => 'Банковская карта'
        ]);

        PaymentMethod::create([
            'title' => 'Наличные'
        ]);
    }
}
