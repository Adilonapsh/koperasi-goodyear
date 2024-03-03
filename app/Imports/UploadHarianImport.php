<?php

namespace App\Imports;

use App\Imports\Sheets\SheetsAnggota;
use App\Imports\Sheets\SheetsBarang;
use App\Imports\Sheets\SheetsDeduction;
use App\Imports\Sheets\SheetsFjkr;
use App\Imports\Sheets\SheetsFjkrDetail;
use App\Imports\Sheets\SheetsSimpanan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;
use Maatwebsite\Excel\Concerns\WithConditionalSheets;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UploadHarianImport implements WithMultipleSheets, SkipsUnknownSheets
{
    // use WithConditionalSheets;
    use LivewireAlert;

    public function sheets(): array
    {
        return [
            'tblAnggota' => new SheetsAnggota(),
            'tblBarang' => new SheetsBarang(),
            'tblFJKR' => new SheetsFjkr(),
            'tblFJKRDetail' => new SheetsFjkrDetail(),
            'tblDeduction' => new SheetsDeduction(),
            'tblSimpanan' => new SheetsSimpanan(),
        ];
    }

    public function onUnknownSheet($sheetName)
    {
        info("Sheet {$sheetName} was skipped");
        // $this->alert('info', 'Sheet ' . $sheetName . ' tidak ditemukan)');
    }
}
