<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Berita>
 */

class BeritaFactory extends Factory
{
    protected $model = Berita::class;

    public function definition(): array
    {
        $FakerID = \Faker\Factory::create('id_ID');
        $FakerEN = \Faker\Factory::create('en_US');


        $title = $FakerEN->sentence(mt_rand(5, 12));

        return [
            'judul' => $title,
            'slug' => Str::slug($title),
            'penulis' => $FakerID->name(),
            'konten' => $FakerEN->paragraph(mt_rand(8, 15)),
            'date' => $FakerEN->date('Y-m-d'),
        ];
    }
}
