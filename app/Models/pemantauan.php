<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemantauan extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_pemantauan';
    protected $guarded = [];
    protected $keyType = 'string';
}
