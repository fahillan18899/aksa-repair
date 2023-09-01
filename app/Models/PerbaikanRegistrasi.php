<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerbaikanRegistrasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = "id_perbaikan_reg";
    protected $keyType = 'string';
    public $incrementing = false;

}
