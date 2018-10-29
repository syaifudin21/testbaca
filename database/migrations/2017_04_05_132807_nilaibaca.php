<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nilaibaca extends Migration
{
    public function up()
    {
        Schema::create('nilaibaca', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_member');
            $table->integer('id_bacaan');
            $table->timestamp('waktumulai')->nullable();
            $table->timestamp('waktuselesai')->nullable();
            $table->timestamp('waktuselesaisoal')->nullable();
            $table->integer('benar')->nullable();
            $table->integer('salah')->nullable();
            $table->integer('kosong')->nullable();
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
        Schema::drop('nilaibaca');
    }
}
