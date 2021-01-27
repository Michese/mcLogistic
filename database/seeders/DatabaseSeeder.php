<?php

namespace Database\Seeders;

use App\Models\Access;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(EventSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(TypeCargoSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(AccessSeeder::class);
        $this->call(UserSeeder::class);
    }
}
