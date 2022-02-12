<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressRows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->string(column:'tel', length:150)->nullable();
            $table->string(column:'vivodeship', length:150)->nullable();
            $table->string(column:'city', length:150)->nullable();
            $table->string(column:'zip_code', length:150)->nullable();
            $table->string(column:'street', length:150)->nullable();
            $table->string(column:'h_number', length:150)->nullable();
            $table->string(column:'apartment', length:150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn(columns:'tel');
            $table->dropColumn(columns:'vivodeship');
            $table->dropColumn(columns:'city');
            $table->dropColumn(columns:'zip_code');
            $table->dropColumn(columns:'street');
            $table->dropColumn(columns:'h_number');
            $table->dropColumn(columns:'apartment');
        });
    }
}