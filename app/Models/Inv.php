<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inv extends Model
{
    use HasFactory;

    protected $table = 'invs';

    protected $fillable = [
        'rs',
        'id_alat',
        'nama_alat',
        'merek',
        'type',
        'seri',
        'lokasi',
        'jadwal',
        'foto',
    ];
}