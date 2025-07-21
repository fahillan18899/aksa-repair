<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'input_pekerjaans';
    protected $primaryKey = 'id';      // <- ini WAJIB jika ganti nama id
    public $incrementing = true;          // <- karena auto-increment
    protected $keyType = 'string';         // <- jika id_req berupa string

    protected $fillable = [ 'id', 'no_urut', 'nama_alat', 'merek', 'type', 'no_seri', 'instansi', 'kerusakan', 'instansi', 'foto', 'created_at', 'updated_at'];
}
