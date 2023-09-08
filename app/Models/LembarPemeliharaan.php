<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LembarPemeliharaan extends Model
{
    protected $primaryKey = 'id_ppm';
    protected $guarded = [];
    protected $keyType = 'string';
    public $incrementing = false;
}
