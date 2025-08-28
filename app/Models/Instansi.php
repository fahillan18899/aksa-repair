<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    protected $table = 'instansis';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'id', 'instansi', 'created_at', 'updated_at'];
}
