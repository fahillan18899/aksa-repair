<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $guarded = [];
    protected $primaryKey = 'id_ruangan';
    protected $keyType = 'string';

}
