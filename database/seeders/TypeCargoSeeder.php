<?php

namespace Database\Seeders;

use App\Models\TypeCargo;
use Illuminate\Database\Seeder;

class TypeCargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeCargo::create([
            'title' => 'мебель'
        ]);

        TypeCargo::create([
            'title' => 'обордование/бытовая техника'
        ]);

        TypeCargo::create([
            'title' => 'текстиль'
        ]);

        TypeCargo::create([
            'title' => 'продукты'
        ]);

        TypeCargo::create([
            'title' => 'косметика'
        ]);

        TypeCargo::create([
            'title' => 'строительные материалы'
        ]);
    }
}
