<?php

namespace App\Exports;

use App\Models\Perbaikan;
use App\Models\pelihara;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class RekapBulanExport implements FromArray, WithEvents, WithColumnWidths, WithTitle
{
    protected $rs;
    protected $tahun;
    protected $bulan;

    protected $jumlahPerbaikan = 0;
    protected $jumlahPelihara = 0;

    protected $barisSectionPerbaikan = 4;
    protected $barisHeaderPerbaikan = 5;
    protected $barisSectionPelihara;
    protected $barisHeaderPelihara;
    protected $barisAkhirPerbaikan;
    protected $barisAkhirPelihara;

    public function __construct($rs, $tahun, $bulan)
    {
        $this->rs = $rs;
        $this->tahun = $tahun;
        $this->bulan = $bulan;
    }

    public function title(): string
    {
        return 'Rekap Bulanan';
    }

    public function array(): array
    {
        $perbaikan = Perbaikan::where('rs', $this->rs)
            ->whereYear('created_at', $this->tahun)
            ->whereMonth('created_at', $this->bulan)
            ->orderBy('created_at')
            ->get();

        $pelihara = pelihara::where('rs', $this->rs)
            ->whereYear('created_at', $this->tahun)
            ->whereMonth('created_at', $this->bulan)
            ->orderBy('created_at')
            ->get();

        $this->jumlahPerbaikan = $perbaikan->count();
        $this->jumlahPelihara = $pelihara->count();

        // Posisi baris tabel kedua mengikuti jumlah data perbaikan.
        $this->barisSectionPelihara = 7 + $this->jumlahPerbaikan;
        $this->barisHeaderPelihara = 8 + $this->jumlahPerbaikan;

        $this->barisAkhirPerbaikan = max(
            $this->barisHeaderPerbaikan,
            $this->barisHeaderPerbaikan + $this->jumlahPerbaikan
        );

        $this->barisAkhirPelihara = max(
            $this->barisHeaderPelihara,
            $this->barisHeaderPelihara + $this->jumlahPelihara
        );

        $namaBulan = \Carbon\Carbon::createFromDate(
            $this->tahun,
            $this->bulan,
            1
        )->translatedFormat('F Y');

        $rows = [
            ['REKAP LAPORAN BULANAN AKSA-REPAIR'],
            ['Periode: ' . $namaBulan],
            [''],
            ['A. LAPORAN PERBAIKAN'],
            [
                'Tanggal',
                'Nama Alat',
                'Merek',
                'Tipe',
                'SN',
                'Lokasi',
                'Teknisi',
                'Status',
                'Korektif',
            ],
        ];

        // Tabel perbaikan
        foreach ($perbaikan as $row) {
            $rows[] = [
                $row->created_at
                    ? $row->created_at->format('d-m-Y H:i')
                    : '-',
                $row->nama_alat ?? '-',
                $row->merek ?? '-',
                $row->type ?? '-',
                $row->seri ?? '-',
                $row->lokasi ?? '-',
                $row->teknisi ?? '-',
                $row->status == '0' ? 'Perbaikan' : 'Selesai',
                $row->korektif ?? '-',
            ];
        }

        // Baris pemisah antartabel
        $rows[] = [''];

        // Judul dan header tabel pemeliharaan
        $rows[] = ['B. LAPORAN PEMELIHARAAN'];
        $rows[] = [
            'Tanggal',
            'Nama Alat',
            'Merek',
            'Tipe',
            'SN',
            'Lokasi',
        ];

        // Tabel pemeliharaan
        foreach ($pelihara as $row) {
            $rows[] = [
                $row->created_at
                    ? $row->created_at->format('d-m-Y H:i')
                    : '-',
                $row->nama_alat ?? '-',
                $row->merek ?? '-',
                $row->type ?? '-',
                $row->seri ?? '-',
                $row->lokasi ?? '-',
            ];
        }

        return $rows;
    }

    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 30,
            'C' => 20,
            'D' => 20,
            'E' => 20,
            'F' => 25,
            'G' => 22,
            'H' => 18,
            'I' => 35,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                $akhirPerbaikan = $this->barisAkhirPerbaikan;
                $sectionPelihara = $this->barisSectionPelihara;
                $headerPelihara = $this->barisHeaderPelihara;
                $akhirPelihara = $this->barisAkhirPelihara;

                // Judul utama
                $sheet->mergeCells('A1:I1');
                $sheet->mergeCells('A2:I2');

                $sheet->getStyle('A1:I1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 16,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '17365D'],
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                ]);

                $sheet->getStyle('A2:I2')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 11,
                        'color' => ['rgb' => '17365D'],
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                    ],
                ]);

                $sheet->getRowDimension(1)->setRowHeight(30);
                $sheet->getRowDimension(2)->setRowHeight(22);

                // Judul bagian perbaikan
                $sheet->mergeCells('A4:I4');
                $sheet->getStyle('A4:I4')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 12,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '2874A6'],
                    ],
                    'alignment' => [
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                ]);

                // Header tabel perbaikan
                $sheet->getStyle('A5:I5')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '5B9BD5'],
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                        'wrapText' => true,
                    ],
                ]);

                // Border tabel perbaikan
                $sheet->getStyle('A5:I' . $akhirPerbaikan)
                    ->applyFromArray([
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => Border::BORDER_THIN,
                                'color' => ['rgb' => 'B7C9D6'],
                            ],
                        ],
                    ]);

                // Judul bagian pemeliharaan
                $sheet->mergeCells(
                    'A' . $sectionPelihara . ':F' . $sectionPelihara
                );

                $sheet->getStyle(
                    'A' . $sectionPelihara . ':F' . $sectionPelihara
                )->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 12,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '217346'],
                    ],
                    'alignment' => [
                        'vertical' => Alignment::VERTICAL_CENTER,
                    ],
                ]);

                // Header tabel pemeliharaan
                $sheet->getStyle(
                    'A' . $headerPelihara . ':F' . $headerPelihara
                )->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '70AD47'],
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                        'wrapText' => true,
                    ],
                ]);

                // Border tabel pemeliharaan
                $sheet->getStyle(
                    'A' . $headerPelihara . ':F' . $akhirPelihara
                )->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => 'B7C9D6'],
                        ],
                    ],
                ]);

                // Rata tengah untuk tanggal dan status
                if ($this->jumlahPerbaikan > 0) {
                    $sheet->getStyle('A6:A' . $akhirPerbaikan)
                        ->getAlignment()
                        ->setHorizontal(Alignment::HORIZONTAL_CENTER);

                    $sheet->getStyle('H6:H' . $akhirPerbaikan)
                        ->getAlignment()
                        ->setHorizontal(Alignment::HORIZONTAL_CENTER);
                }

                if ($this->jumlahPelihara > 0) {
                    $mulaiDataPelihara = $headerPelihara + 1;

                    $sheet->getStyle(
                        'A' . $mulaiDataPelihara . ':A' . $akhirPelihara
                    )->getAlignment()
                        ->setHorizontal(Alignment::HORIZONTAL_CENTER);
                }

                // Tinggi baris header
                $sheet->getRowDimension(5)->setRowHeight(25);
                $sheet->getRowDimension($sectionPelihara)->setRowHeight(23);
                $sheet->getRowDimension($headerPelihara)->setRowHeight(25);

                // Perataan umum
                $sheet->getStyle(
                    'A1:I' . $akhirPelihara
                )->getAlignment()->setVertical(
                    Alignment::VERTICAL_CENTER
                );

                // Pengaturan cetak
                $sheet->getPageSetup()
                    ->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);

                $sheet->getPageSetup()
                    ->setPaperSize(PageSetup::PAPERSIZE_A4);

                $sheet->getPageSetup()
                    ->setFitToWidth(1);

                $sheet->getPageSetup()
                    ->setFitToHeight(0);

                $sheet->getPageSetup()
                    ->setFitToPage(true);

                $sheet->getPageMargins()->setTop(0.5);
                $sheet->getPageMargins()->setBottom(0.5);
                $sheet->getPageMargins()->setLeft(0.25);
                $sheet->getPageMargins()->setRight(0.25);
            },
        ];
    }
}
