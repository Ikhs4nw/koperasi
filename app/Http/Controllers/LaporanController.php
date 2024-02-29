<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Simpanan;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LaporanController extends Controller
{
    public function index(){
        $user = Auth()->id();
        $simpanan = Simpanan::where('user_id', $user)->get();
        $pinjaman = Pinjaman::where('user_id', $user)->get();

        return view('utama.laporan.laporan', compact('simpanan','pinjaman'));
    }
}
