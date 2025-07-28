<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTerima extends Model
{
    use HasFactory;
    protected $table = 'surat_terimas';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string
    protected $fillable = [ 'nama_1', 'jabatan_1', 'bagian_1', 'kontak_1', 
                            'nama_2', 'jabatan_2', 'bagian_2', 'kontak_2', 
                            'nama_alat', 'merek_type', 'no_seri', 'kondisi', 
                            'kelengkapan', 'jumlah', 'keterangan', 'created_at', 'updated_at'];
}
