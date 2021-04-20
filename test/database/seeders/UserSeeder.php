<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                "name" => "Jeremi",
                "level" => "admin",
                "email" => "herdiantojeremi@gmail.com",
                "password" => bcrypt("j23456")
            ],
            [
                "name" => "Andi",
                "level" => "siswa",
                "email" => "andika@gmail.com",
                "password" => bcrypt("andi123")
            ],
            [
                "name" => "Angga",
                "level" => "petugas",
                "email" => "angga@gmail.com",
                "password" => bcrypt("angga123")
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
