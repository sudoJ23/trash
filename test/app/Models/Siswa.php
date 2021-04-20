<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use HasFactory;

    public function spp() {
        return $this->belongsTo(spp::class, 'id_spp');
    }

    public function kelas() {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }

    protected $table = 'siswa';

    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp'
    ];

    protected $primaryKey = "nisn";
}
