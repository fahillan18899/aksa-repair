<?php

namespace App\Exports;

use App\Models\Inv;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekapInvExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Inv::select(
                'id_alat',
                'nama_alat',
                'merek',
                'type',
                'seri',
                'lokasi',
                'jadwal'
            )
            ->where('rs', Auth::user()->rs)
            ->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Merek',
            'Type',
            'Serial Number',
            'Lokasi',
            'Jadwal'
        ];
    }
}
