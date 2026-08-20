<?php

namespace App\Exports;

use App\Models\Inv;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekapInvRsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Inv::select(
                'id_alat',
                'nama_alat',
                'merek',
                'seri',
                'lokasi',
                'rs'
            )->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Merek',
            'Serial Number',
            'Lokasi',
            'Rumah Sakit'
        ];
    }
}
