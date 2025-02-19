<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomklatur extends Model
{
    public $incrementing = false;

    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
