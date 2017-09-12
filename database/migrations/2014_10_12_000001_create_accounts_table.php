<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index()->comment('用户ID');
            $table->tinyInteger('login_type')->unsigned()->index()->default(1)->comment('登录方式');
            $table->string('username', 50)->index()->comment('账号');
            $table->string('password')->comment('密码');
            $table->string('api_token', 60)->index()->comment('认证token');
            $table->integer('logined_ip')->unsigned()->default(0)->comment('最后登录IP');
            $table->rememberToken()->comment('自动登录');
            $table->softDeletes()->comment('假删除');
            $table->timestamp('logined_at')->nullable()->comment('最后登录时间');
            $table->timestamps();
        });

        Schema::create('admin_accounts', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index()->comment('用户ID');
            $table->tinyInteger('login_type')->unsigned()->index()->default(1)->comment('登录方式');
            $table->string('username', 50)->index()->comment('账号');
            $table->string('password')->comment('密码');
            $table->string('api_token', 60)->index()->comment('认证token');
            $table->integer('logined_ip')->unsigned()->default(0)->comment('最后登录IP');
            $table->rememberToken()->comment('自动登录');
            $table->softDeletes()->comment('假删除');
            $table->timestamp('logined_at')->nullable()->comment('最后登录时间');
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
        Schema::dropIfExists('user_accounts');
        Schema::dropIfExists('admin_accounts');
    }
}
