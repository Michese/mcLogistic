<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->bigIncrements('cargo_id');
            $table->unsignedTinyInteger('type_cargo_id');
            $table->double('length')
                ->nullable(false);
            $table->double('width')
                ->nullable(false);
            $table->double('height')
                ->nullable(false);
            $table->double('weight')
                ->nullable(false);
            $table->decimal('amount',8 , 2, true);
            $table->text('comment');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos');
    }
}
