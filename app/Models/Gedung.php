<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = "id_gedung";
    protected $keyType = 'string';
    public $incrementing = false;


}
