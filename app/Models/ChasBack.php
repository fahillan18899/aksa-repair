<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChasBack extends Model
{
    use HasFactory;
    protected $table = 'chas_backs';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'id', 'marketing', 'instansi', 'jumlah', 'nominal', 'created_at', 'updated_at'];
}
