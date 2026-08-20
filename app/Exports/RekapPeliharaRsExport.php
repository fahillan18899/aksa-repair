<?php

namespace App\Exports;

use App\Models\pelihara;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekapPeliharaRsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return pelihara::select(
                'created_at',
                'nama_alat',
                'merek',
                'type',
                'seri',
                'lokasi',
                'rs',
            )
            ->get()
            ->map(function($row){
                return[
                    'created_at' => $row->created_at ? $row->created_at->format('d-m-Y H:i'): '-',
                    'nama_alat' => $row->nama_alat ?? '-',
                    'merek' => $row->merek ?? '-',
                    'type' => $row->type ?? '-',
                    'seri' => $row->seri ?? '-',
                    'lokasi' => $row->lokasi ?? '-',
                    'rs' => $row->rs ?? '-',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Nama Alat',
            'Merk',
            'Tipe',
            'SN',
            'Lokasi',
            'Rumah Sakit'
        ];
    }
}
