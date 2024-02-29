<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Simpanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function save_simpanan()
    {
        Simpanan::create([
            'user_id' => request()->user_id,
            'tgl_simpanan' => request()->tgl_simpanan,
            'jlh_simpanan' => request()->jlh_simpanan,
        ]);
    }

    public static function update_simpanan($simpanan_id)
    {
        $simpanan = Simpanan::find($simpanan_id);

        $simpanan->user_id = request()->user_id2;
        $simpanan->tgl_simpanan = request()->tgl_simpanan2;
        $simpanan->jlh_simpanan = request()->jlh_simpanan2;

        $simpanan->save();
    }

    public static function delete_simpanan($simpanan_id)
    {
        $simpanan = Simpanan::find($simpanan_id);
        $simpanan->delete();
    }
}
