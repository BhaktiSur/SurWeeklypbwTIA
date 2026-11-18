<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{

    public function run(): void
    {
        $mahasiswas = [
            [
                'nama' => 'Bangsur',
                'nim' => '13242520027',
                'prodi' => 'Teknologi Informasi',
                'email' => 'bangsur@example.com',
                'nohp' => '081274488210',
                'foto' => 'images/bangsur.jpg',
            ],
            [
                'nama' => 'Basan',
                'nim' => '19287183220',
                'prodi' => 'Teknologi Informasi',
                'email' => 'basan@example.com',
                'nohp' => '081237827281',
                'foto' => 'images/basan.jpg',
            ],
            [
                'nama' => 'Andi Pratama',
                'nim' => '12628918751',
                'prodi' => 'Sistem Informasi',
                'email' => 'andi@example.com',
                'nohp' => '081234567801',
                'foto' => 'images/andi.jpg',
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '153871687127',
                'prodi' => 'Teknologi Informasi',
                'email' => 'budi@example.com',
                'nohp' => '081234567802',
                'foto' => 'images/budi.jpg',
            ],
            [
                'nama' => 'Citra Lestari',
                'nim' => '152917988712',
                'prodi' => 'Manajemen',
                'email' => 'citra@example.com',
                'nohp' => '081234567803',
                'foto' => 'images/citra.jpg',
            ],
        ];

        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::query()->updateOrCreate(
                ['nim' => $mahasiswa['nim']],
                $mahasiswa,
            );
        }
    }
}
