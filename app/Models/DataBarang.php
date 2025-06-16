<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'id', 'no_urut', 'nama_alat', 'no_seri', 'type', 'kerusakan_alat',
     'instansi'];
}
