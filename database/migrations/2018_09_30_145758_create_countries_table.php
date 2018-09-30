<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',2)->index();
            $table->string('iso3',3)->nullable();
            $table->unsignedInteger('iso_numeric')->nullable();
            $table->string('fips',2)->nullable();
            $table->string('name')->nullable();
            $table->string('asciiname')->nullable();
            $table->string('capital')->nullable();
            $table->unsignedInteger('area')->nullable();
            $table->unsignedInteger('population')->nullable();
            $table->string('continent_code',4)->nullable();
            $table->string('tld',4)->nullable();
            $table->string('currency_code',3)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('postal_code_format',50)->nullable();
            $table->string('postal_code_regex',200)->nullable();
            $table->string('languages',50)->nullable();
            $table->string('neighbours',50)->nullable();
            $table->string('equivalent_fips_code',100)->nullable();
            $table->string('background_image',200)->nullable();
            $table->enum('admin_type',[0,1,2])->default(0);
            $table->unsignedTinyInteger('admin_field_active')->default(0);
            $table->boolean('active')->default(1)->index()->nullable(); ///
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
        Schema::dropIfExists('countries');
    }
}
