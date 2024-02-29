<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::getAnggota();
        return view('utama.anggota.anggota', compact('anggota'));
    }

    public function update($anggota_id)
    {
        User::update_anggota($anggota_id);
        return Redirect::to('/anggota')->with('toast_success', 'Data Successfully Update!');
    }

    public function destroy($anggota_id){
        User::delete_anggota($anggota_id);
        return Redirect::to('/anggota')->with('toast_success', 'Data Successfully Delete');
    }
}
