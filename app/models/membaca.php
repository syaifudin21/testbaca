<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class membaca extends Model
{
    use SoftDeletes;
    protected $table = 'bacaan';

    // protected $fillable = [''];
    protected $guarded = ['updated_at', 'created_at', 'deleted_at']; 
}
