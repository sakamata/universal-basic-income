<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('send_user_id')->comment('送信者id');
            $table->unsignedBigInteger('receive_user_id')->comment('受信者id');
            $table->unsignedBigInteger('point')->comment('送信されたポイント');
            $table->unsignedBigInteger('send_user_balance')->nullable()->comment('送信者の残高');
            $table->unsignedBigInteger('receive_user_balance')->nullable()->comment('受信者の残高');
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
        Schema::dropIfExists('histories');
    }
}
