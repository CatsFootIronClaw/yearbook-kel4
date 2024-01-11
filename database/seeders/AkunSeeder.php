<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akun')->insert(
            [
                'id_sekolah' => 1,
                'email' => 'daffa@gmail.com',
                'username' => 'admin',
                'role' => 'superadmin',
                'password' => Hash::make('123')
            ]
        );
    }
}
