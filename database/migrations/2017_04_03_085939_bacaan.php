<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bacaan extends Migration
{
    public function up()
    {
        Schema::create('bacaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul', 50);
            $table->string('label', 20);
            $table->time('waktu');
            $table->string('pencipta', 15);
            $table->text('bacaan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bacaan');
    }
}
