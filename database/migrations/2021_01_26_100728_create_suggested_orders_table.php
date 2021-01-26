<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggested_orders', function (Blueprint $table) {
            $table->bigIncrements('suggested_order_id');
            $table->unsignedBigInteger('order_id')
                ->nullable(false);
            $table->unsignedBigInteger('user_id')
                ->nullable(false);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('order_id')
                ->references('order_id')->on('orders');
            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggested_orders');
    }
}
