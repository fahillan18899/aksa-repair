<?php

namespace App\Exports;

use App\Models\Registrasi;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistrasiAssetsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Registrasi::all();
    }
}
