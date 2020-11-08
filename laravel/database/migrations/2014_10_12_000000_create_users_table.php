<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // todo コメントのconfig化、ロケーション別設定
            $table->string('name')->comment('ユーザー定義の名前')->comment('未指定は unique_id等の値を代入');
            $table->string('unique_id', 8)->unique()->comment('自動付与されるid,QRコードやユニークurlに使用');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_authenticated')->default(0);
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->unsignedBigInteger('sharing_after_point')->default(config('const.default_point'))->comment('分配直後の現在ポイント,計算,バックアップ等に利用');
            $table->string('google_email')->unique()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
