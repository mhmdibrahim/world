<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code',2)->index();
            $table->string('name',200)->index();
            $table->string('asciiname',200)->nullable(); //
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->char('feature_class',1)->nullable();
            $table->string('feature_code',10)->nullable();
            $table->string('subadmin1_code',80)->nullable();
            $table->string('subadmin2_code',20)->nullable();
            $table->bigInteger('population')->nullable();//
            $table->string('time_zone',100)->nullable();
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
        Schema::dropIfExists('cities');
    }
}
