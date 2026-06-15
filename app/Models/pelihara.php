<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelihara extends Model
{
    use HasFactory;

    protected $table = 'peliharas';

    protected $fillable = [
        'rs',
        'id_alat',
        'teknisi',
        'nama_alat',
        'seri',
        'merek',
        'type',
        'lokasi',
        'persiapan',
        'pemantauan',
        'cek_alat',
        'evaluasi',
        'foto',
    ];
}
