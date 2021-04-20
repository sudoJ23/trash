<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;

    public function siswa() {
        return $this->hasOne(Siswa::class);
    }

    protected $table = 'spp';
    protected $primaryKey = 'id_spp';
    protected $fillable = [
        'id_spp',
        'tahun',
        'nominal'
    ];
}
