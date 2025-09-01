<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumnetKalibrasi extends Model
{
    use HasFactory;
    protected $table = 'document_kalibrasis';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;       // <- karena auto-increment
    protected $keyType = 'string';     // <- jika id_req berupa string

    protected $fillable = [ 'id', 'instansi', 'marketing', 'jumlah', 'document', 'created_at', 'updated_at'];
}
