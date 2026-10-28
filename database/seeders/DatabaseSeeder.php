<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Berita::factory()->count(5)->create();

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@gmail.com',
        // ]);

        // DB::table('users')->insert([
        //     'name' => "Bang sur",
        //     'email' => "bangsur@gmail.com",
        //     'password' => Hash::make('atmintkececool12345'),
        // ]);
    }
}
