<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
               'nama_pemilik'=>'User Biasa',
               'no_hp'=>'081208120812',
               'type'=>0,
               'password'=> bcrypt('12121212'),
            ],
            [
                'nama_pemilik'=>'Mitra',
                'no_hp'=>'081308130813',
                'type'=>1,
                'password'=> bcrypt('12121212'),
             ],
             [
                'nama_pemilik'=>'Admin User',
                'no_hp'=>'081408140814',
                'type'=>2,
                'password'=> bcrypt('12121212'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
