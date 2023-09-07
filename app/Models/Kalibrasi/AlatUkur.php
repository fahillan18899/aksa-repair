<?php

namespace App\Models\Kalibrasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatUkur extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = "id_number";
    protected $keyType = 'string';
    public $incrementing = false;
}
