<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Surya Bhakti',
                'nim' => '13242520027',
                'prodi' => 'Teknologi Informasi',
                'email' => 'suryabhakti@example.com',
                'nohp' => '081274488210',
                'foto' => 'images/surya.jpg',
            ],
            [
                'nama' => 'Basan Pratama',
                'nim' => '19287183220',
                'prodi' => 'Teknologi Informasi',
                'email' => 'basan@example.com',
                'nohp' => '081237827281',
                'foto' => 'images/basan.jpg',
            ],
        ]);
    }
}
