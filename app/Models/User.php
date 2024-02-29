<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

// use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Request;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'alamat',
        'no_telp',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public static function getAnggota()
    {
        $user = User::role('Anggota')->orderBy('name','asc')->get();
        return $user;
    }
    public static function update_anggota($anggota_id)
    {
        $user = User::find($anggota_id);
        $user->name = request()->name;
        $user->no_telp = request()->no_telp;
        $user->alamat = request()->alamat;

        $user->save();
    }
    public static function delete_anggota($anggota_id){
        $anggota = User::find($anggota_id);
        $anggota->delete();
    }
}
