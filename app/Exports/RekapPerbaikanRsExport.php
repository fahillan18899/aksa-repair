<?php

namespace App\Exports;

use App\Models\Perbaikan;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekapPerbaikanRsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Perbaikan::select(
                'created_at',
                'rs',
                'nama_alat',
                'teknisi',
                'status',
                'korektif'
            )
            ->get()
            ->map(function($row){
                return[
                    'created_at' => $row->created_at ? $row->created_at->format('d-m-Y H:i'): '-',
                    'rs' => $row->rs ?? '-',
                    'nama_alat' => $row->nama_alat ?? '-',
                    'teknisi' => $row->teknisi ?? '-',
                    'status' => $row->status == '0' ? 'Perbaikan' : 'Selesai',
                    'korektif' => $row->korektif ?? '-',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Tanggal',
            'Rumah Sakit',
            'Nama Alat',
            'Teknisi',
            'Status',
            'Korektif'
        ];
    }
}
