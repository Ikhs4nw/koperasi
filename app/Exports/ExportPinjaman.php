<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\Pinjaman;

class ExportPinjaman implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $pinjaman = Pinjaman::orderBy('user_id','asc')->get();
        return view('utama.cetak.export-pinjaman', compact('pinjaman'));
    }
}
