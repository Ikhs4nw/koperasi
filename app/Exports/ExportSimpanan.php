<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\Models\Simpanan;

class ExportSimpanan implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $simpanan = Simpanan::orderby('user_id','asc')->get();
        return view('utama.cetak.export-simpanan', compact('simpanan'));
    }
}
