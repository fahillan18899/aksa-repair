<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerbaikanRegistrasi extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $guarded = [];

    protected $primaryKey = 'id_perbaikan_reg';
    protected $keyType = 'string';

        protected $fillable = [
            'id_perbaikan_reg', 'id_aset_reg', 'tanggal_perbaikan_reg', 'nama_alat_reg',
            'merek_alat_reg', 'type_alat_reg', 'serial_number_reg', 'lokasi_alat_reg', 
            'pelapor_reg', 'keterangan_kondisi_alat', 'ka_instalasi_reg', 'teknisi_1_reg',
            'teknisi_2_reg', 'teknisi_3_reg', 'teknisi_4_reg', 'teknisi_5_reg', 'suku_cadang',
            'volume', 'harga_satuan', 'jumlah_harga', 'keluhan_dari_alat_reg', 'korektif_reg',
            'foto_perbaikan', 'kode_rs'
    ];
}
