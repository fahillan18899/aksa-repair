<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenghapusanRegistrasi extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $guarded = [];
    protected $primaryKey = 'id_perbaikan_reg';
    protected $keyType = 'string';

}
