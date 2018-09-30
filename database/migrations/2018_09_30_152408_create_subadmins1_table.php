<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubadmins1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subadmins1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20)->index();
            $table->string('country_code',2)->index()->nullable();
            $table->string('name',200)->index();
            $table->string('asciiname',200)->nullable();
            $table->boolean('active')->default(1)->index()->nullable();
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
        Schema::dropIfExists('subadmins1');
    }
}
