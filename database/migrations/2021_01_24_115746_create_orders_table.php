<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->unsignedBigInteger('user_id')
                ->nullable(false);
            $table->unsignedBigInteger('courier_id')
                ->nullable(true)
                ->default(null);
            $table->unsignedBigInteger('cargo_id')
                ->nullable(false);
            $table->unsignedTinyInteger('order_status_id')
                ->nullable(false);
            $table->string('sending_address',255)
                ->nullable(false);
            $table->string('delivery_address',255)
                ->nullable(false);
            $table->timestamp('sending_date')
                ->nullable(false);
            $table->timestamp('delivery_date')
                ->nullable(false);
            $table->string('delivery_client_name', 128)
                ->nullable(false);
            $table->unsignedBigInteger('delivery_client_phone')
                ->nullable(false);
            $table->boolean('has_insurance')
                ->default(false);
            $table->boolean('has_filling_up')
                ->default(false);
            $table->boolean('has_supporting_documents')
                ->default(false);
            $table->boolean('has_return_documents')
                ->default(false);
            $table->decimal('amount', 8, 2, true)
                ->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('user_id')->on('users');
            $table->foreign('courier_id')
                ->references('user_id')->on('users');
            $table->foreign('cargo_id')
                ->references('cargo_id')->on('cargos');
            $table->foreign('order_status_id')
                ->references('order_status_id')->on('order_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
