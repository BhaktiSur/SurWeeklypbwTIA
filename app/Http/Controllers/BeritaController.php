<?php

namespace App\Http\Controllers;

use App\Models\Berita;
// use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public static function tampilberita()
    {
        return view('berita', [
            "title" => "Berita",
            "beritas" => Berita::all()
        ]);
    }

    public static function tampilberitatunggal($slug)
    {
        $beritas = Berita::all();

        $singlenews = [];

        foreach ($beritas as $berita) {
            if ($berita["slug"] === $slug) {
                $singlenews = $berita;
            }
        }

        return view('berita-tunggal', [
            "title" => $singlenews["judul"], // Mengirimkan judul berita ke view,
            "singlenews" => $singlenews,
        ]);
    }
}
