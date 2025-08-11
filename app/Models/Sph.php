<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sph extends Model
{
    use HasFactory;
    protected $table = 'sphs';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'lokasi_tanggal', 'no_surat', 'hal', 'yth',
                            'akom', 'part', 'nama_alat', 'keterangan', 
                            'jumlah', 'harga', 'diskon', 'harga_diskon', 
                            'harga_tanpa_pajak', 'pajak', 'total', 'user', 
                            'created_at', 'updated_at'];
}
