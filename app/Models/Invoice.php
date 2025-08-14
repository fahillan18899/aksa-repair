<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;       // <- karena auto-increment
    protected $keyType = 'string';     // <- jika id_req berupa string

    protected $fillable = [ 'id', 'yth', 'tgl_invoice', 'no_invoice', 'no_pesanan', 'alamat', 
                            'akom', 'part', 'nama_alat', 'keterangan', 'jumlah', 'harga', 'diskon',
                            'harga_diskon', 'harga_tanpa_pajak', 'pajak', 'total', 'user', 'created_at', 'updated_at'];
}
