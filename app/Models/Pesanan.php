<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $primaryKey = 'id_req';      // <- ini WAJIB jika ganti nama id
    public $incrementing = false;          // <- karena bukan auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [
        'id_req', 'nama_req', 'merek_req', 'type_req', 'sn_req',
        'lokasi_req', 'kerusakan_req', 'pelapor_req', 'tanggal_req', 'kode_rs'
    ];
}
