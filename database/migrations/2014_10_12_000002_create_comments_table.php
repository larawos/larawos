<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->increments('id')->comment('评论ID');
            $table->integer('user_id')->unsigned()->comment('用户ID');
            $table->morphs('commentable');
            $table->text('content')->nullable()->comment('评论内容');
            $table->tinyInteger('status')->unsigned()->default(1)->comment('数据状态');
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
        Schema::dropIfExists('comments');
    }
}
