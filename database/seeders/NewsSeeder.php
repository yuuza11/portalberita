<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    News::create([
        'title' => 'Blaugrana berhasil comeback!',
        'description' => 'FC Barcelona berhasil menambah jumlah trophy Copa Del Rey setelah menumbangkan Real Madrid dengan skor dramatis.',
        'image' => 'images/barcelona.jpg',
        'category' => 'olahraga',
    ]);

    News::create([
        'title' => 'Game yang ditunggu para gamers di 2025',
        'description' => 'Inilah game yang para gamers tunggu jadwal rilisnya.',
        'image' => 'images/games2025.jpg',
        'category' => 'olahraga',
    ]);

    News::create([
        'title' => 'Hasil F1 GP Arab Saudi2025, Oscar Piastri menang, Max Verstapen penalti!',
        'description' => 'Oscar Piastri raih kemenangan dramatis di GP Arab Saudi.',
        'image' => 'images/f1.jpg',
        'category' => 'olahraga',
    ]);
}
}
