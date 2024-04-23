<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $users = [
            [
            'name'=>'Admin',
            'email'=>'admin@email.com',
            'type'=> 0,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'Manager User',
            'email'=>'manager@email.com',
            'type'=> 1,
            'password'=> bcrypt('123456'),
            ],
            [
            'name'=>'User',
            'email'=>'user@email.com',
            'type'=> 2,
            'password'=> bcrypt('123456'),
            ],
            [
            'name'=>'Super Admin',
            'email'=>'superadmin@email.com',
            'type'=> 3,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'dosen',
            'email'=>'dosen@email.com',
            'type'=> 4,
            'password'=> bcrypt('12345'),
                ],
            [
            'name'=>'mahasiswa',
            'email'=>'mahasiswa@email.com',
            'type'=> 5,
            'password'=> bcrypt('12345'),
                ],
            [
            'name'=>'tendik',
            'email'=>'tendik@email.com',
            'type'=> 6,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'admin akademik',
            'email'=>'akademik@email.com',
            'type'=> 7,
            'password'=> bcrypt('12345'),
            ], 
            [
            'name'=>'admin keuangan',
            'email'=>'keuangan@email.com',
            'type'=> 8,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'direktur',
            'email'=>'direktur@email.com',
            'type'=> 9,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'wd1',
            'email'=>'wd1@email.com',
            'type'=> 10,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'wd2',
            'email'=>'wd2@email.com',
            'type'=> 11,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'wd3',
            'email'=>'wd3@email.com',
            'type'=> 12,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'lppm',
            'email'=>'lppm@email.com',
            'type'=> 13,
            'password'=> bcrypt('12345'),
            ],
            [
            'name'=>'sdm',
            'email'=>'sdm@email.com',
            'type'=> 14,
            'password'=> bcrypt('12345'),
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        
        }
    }
}
