<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LembarPemeliharaan extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_ppm';
    protected $guarded = [];
    protected $keyType = 'string';
    protected $casts = [ 'persiapan' => 'array', ];
    protected $fillable = [ 'kode_rs','id_ppm','tanggal','kegiatan','engineer','id_aset','nama_alat', 'serial_number',
    'merek','tipe','ruangan','persiapan','pemantauan','preverentif','cek_alat','nama_sukucadang',
    'volume','harga_satuan','jumlah_harga','evaluasi','status','status1','mulai_bekerja','selesai_kerja',
    'durasi','tanggal_selesai','user','engginer',
  ];
    
}
