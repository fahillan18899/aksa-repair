<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerbaikanUnregistrasi extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $guarded = [];
    protected $primaryKey = 'id_perbaikan_un';
    protected $keyType = 'string';

}
