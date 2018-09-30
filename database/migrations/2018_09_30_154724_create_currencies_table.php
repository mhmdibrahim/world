<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',3)->index();
            $table->string('name',50)->nullable();
            $table->string('html_entity',30)->nullable();
            $table->string('font_arial',5)->nullable();
            $table->string('font_code2000',5)->nullable();
            $table->string('unicode_decimal',5)->nullable();
            $table->string('unicode_hex',5)->nullable();
            $table->unsignedTinyInteger('in_left')->default(0)->nullable(); //
            $table->unsignedInteger('decimal_places')->default(2)->nullable(); //
            $table->string('decimal_separator',10)->default('.')->nullable(); //
            $table->string('thousand_separator',10)->default('.')->nullable(); //
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
        Schema::dropIfExists('currencies');
    }
}
