<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bacaansoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacaansoal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bacaan');
            $table->text('pertanyaan');
            $table->text('jawaban1');
            $table->text('jawaban2');
            $table->text('jawaban3');
            $table->text('jawabanbenar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bacaansoal');
    }
}
