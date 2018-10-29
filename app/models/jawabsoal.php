<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class jawabsoal extends Model
{
    protected $table = 'jawabsoal';
    public $timestamps = false;

    protected $fillable = ['id_member', 'id_soal', 'id_bacaan', 'jawaban'];
    // protected $guarded = [''];
}
