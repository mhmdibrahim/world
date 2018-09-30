<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubadmins2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subadmins2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20);
            $table->string('country_code',2)->index()->nullable();
            $table->string('subadmin1_code',20)->index()->nullable();
            $table->string('name',200)->index()->nullable();
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
        Schema::dropIfExists('subadmins2');
    }
}
