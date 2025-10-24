<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;
    protected $table = 'rekaps';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'tanggal', 'marketing', 'instansi', 
                            'akomodasi', 'sperpart', 'sph', 
                            'invoice', 'nominal', 'ppn', 
                            'pph3', 'admin', 'status', 
                            'keuntungan', 'ket', 'created_at', 'updated_at'];
}
