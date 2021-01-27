<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $admin)
    {
        $admin->fill([
            'name' => 'Администратор',
            'email' => 'admin@admin.com',
            'phone' => 88008008080,
            'password' => \Hash::make('12345678'),
        ]);

        $admin->access_id = 5;
        $admin->save();
    }
}
