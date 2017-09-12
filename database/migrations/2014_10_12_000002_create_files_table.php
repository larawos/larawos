<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id')->comment('文件ID');
            $table->string('path')->comment('文件路径');
            $table->string('md5')->comment('MD5校验值');
            $table->tinyInteger('status')->unsigned()->default(1)->comment('文件状态');
            $table->timestamps();
        });

        Schema::create('fileables', function (Blueprint $table) {
            $table->integer('file_id')->unsigned()->index()->comment('文件ID');
            $table->integer('fileable_id')->unsigned()->index()->comment('关联模型ID');
            $table->string('fileable_type', 100)->index()->comment('关联模型名称');
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
        Schema::dropIfExists('files');
        Schema::dropIfExists('fileables');
    }
}
