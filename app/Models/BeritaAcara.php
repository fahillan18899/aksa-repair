<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaAcara extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'string';

    protected $fillable = ['id', 'ba', 'rs', 'kontak', 'alat', 'jenis', 
                           'skc', 'keluhan', 'aksi', 'hasil', 'pj', 'teknisi', 
                           'tanggal_1', 'tanggal_2', 'instansi', 'path'];
}
