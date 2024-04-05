<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LembarPemeliharaan extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_ppm';
    protected $guarded = [];
    protected $keyType = 'string';
}
