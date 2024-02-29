<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pinjaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function save_pinjaman(){
        Pinjaman::create([
            'user_id' => request()->user_id,
            'tgl_pinjaman' => request()->tgl_pinjaman,
            'jlh_pinjaman' => request()->jlh_pinjaman,
        ]);
    }

    public static function update_pinjaman($pinjaman_id)
    {
        $pinjaman = Pinjaman::find($pinjaman_id);

        $pinjaman->user_id = request()->user_id2;
        $pinjaman->tgl_pinjaman = request()->tgl_pinjaman2;
        $pinjaman->jlh_pinjaman = request()->jlh_pinjaman2;

        $pinjaman->save();
    }

    public static function delete_pinjaman($pinjaman_id){
        $pinjaman = Pinjaman::find($pinjaman_id);
        $pinjaman->delete();
    }
}
