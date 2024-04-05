<?php

namespace App\Imports;

use App\Models\Registrasi;
use Maatwebsite\Excel\Concerns\ToModel;

class RegistrasiAsetsImport implements ToModel
{
    /**
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Registrasi([
            'id_aset'                 => $row[0],
            'qr_code'                 => $row[1],
            'jenis_alat'              => $row[2],
            'nama_alat'               => $row[3],
            'merek'                   => $row[4],
            'type'                    => $row[5],
            'serial_number'           => $row[6],
            'lokasi_alat'             => $row[7],
            'tanggal_kalibrasi'       => $row[8],
            'distributor'             => $row[9],
            'alamat_distributor'      => $row[10],
            'tlp_distributor'         => $row[11],
            'email_distributor'       => $row[12],
            'teknisi_distributor'     => $row[13],
            'tlp_t_distributor'       => $row[14],
            'no_sertifikat_kalibrasi' => $row[15],
            'teknisi_ppm'             => $row[16],
            'harga_perolehan'         => $row[17],
            'sumber_dana'             => $row[18],
            'tahun_perolehan'         => $row[19],
            'kode_rs'                 => $row[20],
            'jadwal_pemeliharaan'     => $row[21],
            'umur_alat'               => $row[22],
            'no_inventaris_1'         => $row[23],
            'no_inventaris_2'         => $row[24],
            'penyusutan_aset'         => $row[25],
            'created_at'              => $row[26],
            'updated_at'              => $row[27],
            'akl'                     => $row[28],
            'akd'                     => $row[29],
            'gambar'                  => $row[30],
        ]);
    }
}
