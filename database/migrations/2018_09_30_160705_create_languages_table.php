<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('abbr',10)->index();
            $table->string('locale',20)->nullable();
            $table->string('name',100);
            $table->string('native',20)->nullable();
            $table->string('flag',100)->nullable();
            $table->string('app_name',100)->nullable();
            $table->string('script',20)->nullable();
            $table->enum('direction',['ltr', 'rtl'])->default('ltr');
            $table->unsignedTinyInteger('russian_pluralization')->default(0)->nullable();//
            $table->boolean('active')->default(1)->index()->nullable();
            $table->tinyInteger('default')->default(0)->index();
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('lft')->nullable();
            $table->unsignedInteger('rgt')->nullable();
            $table->unsignedInteger('depth')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('languages');
    }
}
