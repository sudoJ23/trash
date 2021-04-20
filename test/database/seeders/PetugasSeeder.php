<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petugas = [
            [
                'username' => 'Jeremi123',
                'password' => bcrypt('Test12345'),
                'nama_petugas' => 'Jeremi',
                'level' => 'admin'
            ],
            [
                'username' => 'Andi123',
                'password' => bcrypt('Test12345'),
                'nama_petugas' => 'Andika',
                'level' => 'petugas'
            ]
            ];

        foreach ($petugas as $key => $value) {
            Petugas::create($value);
        }
    }
}
