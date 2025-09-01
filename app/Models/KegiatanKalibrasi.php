<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanKalibrasi extends Model
{
    use HasFactory;
    protected $table = 'kegiatan_kalibrasis';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'instansi', 'jadwal', 'proses','created_at', 'updated_at'];
}
