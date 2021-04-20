<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'id_petugas',
        'username',
        'password',
        'nama_petugas',
        'level'
    ];

    protected $hidden = ['password'];
    protected $table = "petugas";
    protected $primaryKey = 'id_petugas';

    public function pembayaran() {
        return $this->hasOne(pembayaran::class);
    }
}
