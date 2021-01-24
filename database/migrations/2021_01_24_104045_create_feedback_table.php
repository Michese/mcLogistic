<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('feedback_id');
            $table->unsignedBigInteger('user_id')
                ->nullable(false);
            $table->unsignedTinyInteger('rating')
                ->nullable(false);
            $table->string('dignities', 256)
                ->default('');
            $table->string('disadvantages', 256)
                ->default('');
            $table->text('comment')
                ->nullable(false);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
