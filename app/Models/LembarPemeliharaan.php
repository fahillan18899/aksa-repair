<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LembarPemeliharaan extends Model
{
    protected $primaryKey = 'id_ppm'; // Menggunakan 'id_ppm' sebagai primary key

    protected $fillable = [
        'id_ppm',
        'tanggal',
        'kegiatan',
        'engineer',
        'id_aset',
        'nama_alat',
        'serial_number',
        'merek',
        'instalasi',
        'tipe',
        'ruangan',
        'hand_hygiene',
        'menyiapkan_alat_dan_bahan',
        'alat_pelindung_diri',
        'mengoperasikan_alat_kalibrasi',
        'ktd',
        'mengoperasikan_alat',
        'identifikasi_bahaya',
        'badan_selungkup1',
        'badan_selungkup2',
        'alat_sistem_interlock1',
        'alat_sistem_interlock2',
        'kabel_kelenturan1',
        'kabel_kelenturan2',
        'sistem_pengunci1',
        'sistem_pengunci2',
        'tombol_saklar1',
        'tombol_saklar2',
        'label_penandaan1',
        'label_penandaan2',
        'display_layar1',
        'display_layar2',
        'aksesoris1',
        'aksesoris2',
        'indikator_bunyi1',
        'indikator_bunyi2',
        'pembersihan',
        'pengencangan_bagian_alat',
        'pelumasan',
        'kalibrasi_berkala',
        'penggantian_bahan_habis_pakai',
        'cek_alat',
        'nama_sukucadang',
        'volume',
        'harga_satuan',
        'jumlah_harga',
        'evaluasi',
        'status',
        'status1',
        'mulai_bekerja',
        'selesai_kerja',
        'durasi',
        'user',
        'engginer',
        'kode_rs',
    ];
}
