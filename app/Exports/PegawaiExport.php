<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PegawaiExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
        {
            return collect($this->data)->map(function ($item) {
                return [
                    $item->nip,
                    $item->nama,
                    $item->alamat,
                    $item->tanggal_lahir,
                    $item->divisi->nama_divisi ?? '-',
                ];
            });
        }

    public function headings(): array
        {
            return ['NIP', 'Nama', 'Alamat', 'Tanggal Lahir', 'Divisi'];
        }  
}
