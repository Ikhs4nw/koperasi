<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Simpanan;
use App\Exports\ExportSimpanan;
use Maatwebsite\Excel\Facades\Excel;

class SimpananController extends Controller
{
    public function index()
    {
        $anggota = User::getAnggota();
        $simpanan = Simpanan::orderBy('user_id','asc')->get();
        return view('utama.simpanan.simpanan', compact('simpanan', 'anggota'));
    }

    public function store()
    {
        Simpanan::save_simpanan();
        return redirect('/simpanan')->with('toast_success', 'Data Successfully Save!');
    }

    public function update($simpanan_id){
        Simpanan::update_simpanan($simpanan_id);
        return redirect('/simpanan')->with('toast_success', 'Data Successfully Update!');
    }

    public function destroy($simpanan_id){
        Simpanan::delete_simpanan($simpanan_id);
        return redirect('/simpanan')->with('toast_success', 'Data Successfully Delete!');
    }

    public function export_simpanan(){
        return Excel::download(new ExportSimpanan, "simpanan.xlsx");
    }
}
