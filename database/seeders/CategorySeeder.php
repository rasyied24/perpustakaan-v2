<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Fiksi', 'Non-Fiksi', 'Novel', 'Biografi', 'Sejarah',
            'Sains', 'Teknologi', 'Pendidikan', 'Agama', 'Psikologi',
            'Komputer & Pemrograman', 'Ekonomi & Bisnis', 'Hukum', 'Politik & Sosial', 'Kesehatan & Kedokteran',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
