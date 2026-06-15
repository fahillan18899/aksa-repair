<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    protected $table = 'perbaikans';

    protected $fillable = [
        'rs',
        'id_alat',
        'nama_alat',
        'merek',
        'type',
        'seri',
        'lokasi',
        'kepala',
        'teknisi',
        'korektif',
        'catatan',
        'foto',
    ];
}
