<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembalianUnregistrasi extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = "id_perbaikan_un";
    protected $keyType = 'string';
    public $incrementing = false;
}
