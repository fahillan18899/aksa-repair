<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsKeuangan extends Model
{
    use HasFactory;
    protected $table = 'cs_keuangans';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'id', 'jadwal', 'instansi', 'jumlah', 'wilayah', 
                            'marketing', 'ba', 'created_at', 'updated_at'];
}
