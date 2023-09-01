<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = "id_aset";
    protected $keyType = 'string';
    public $incrementing = false;
}
