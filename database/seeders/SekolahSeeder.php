<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sekolah')->insert(
            [
                'nama_sekolah' => 'SMKN 1 Bekasi',
                'alamat_sekolah' => 'Jalan Bintara VIII No 2 Bintara, Bekasi Barat, 17134',
                'visi' => 'MENJADI  SMK  YANG MENGHASILKAN SDM KOMPETEN, BERKARAKTER,  DAN IHSAN',
                'misi' => '1. Melaksanakan Sistem Manajemen Mutu ISO 9001 : 2015
                2. Membudayakan pengamalan nilai-nilai agama dalam setiap aspek kehidupan seluruh warga sekolah.
                3. Menyelenggarakan pendidikan formal kejuruan untuk menghasilkan lulusan yang berkarakter, cerdas, inovatif , kreatif, sesuai dengan tuntutan dunia industri dan mampu berwirausaha.',
            ]
        );
    }
}
