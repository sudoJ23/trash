<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [
        'id_pembayaran',
        'id_petugas',
        'nisn',
        'tgl_bayar',
        'bulan_dibayar',
        'tahun_dibayar',
        'jumlah_bayar'
    ];

    public function nisn() {
        return $this->belongsTo(Siswa::class, 'nisn');
    }

    public function petugas() {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
