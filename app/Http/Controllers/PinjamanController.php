<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pinjaman;
use App\Exports\ExportPinjaman;
use Maatwebsite\Excel\Facades\Excel;

class PinjamanController extends Controller
{
    public function index()
    {
        $anggota = User::getAnggota();
        $pinjaman = Pinjaman::orderBy('user_id','asc')->get();
        return view('utama.pinjaman.pinjaman', compact('anggota', 'pinjaman'));
    }

    public function store(){
        Pinjaman::save_pinjaman();
        return redirect('/pinjaman')->with('toast_success', 'Data Successfully Save!');
    }

    public function update($pinjaman_id){
        Pinjaman::update_pinjaman($pinjaman_id);
        return redirect('/pinjaman')->with('toast_success', 'Data Successfully Update!');
    }

    public function destroy($pinjaman_id){
        Pinjaman::delete_pinjaman($pinjaman_id);
        return redirect('/pinjaman')->with('toast_success', 'Data Successfully Delete!');
    }
    public function export_pinjaman(){
        return Excel::download(new ExportPinjaman, "pinjaman.xlsx");
    }
}
