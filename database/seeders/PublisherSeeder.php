<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publishers = [
            'Gramedia Pustaka Utama', 'Mizan', 'Elex Media Komputindo', 'Republika',
            'Andi Publisher', 'GagasMedia', 'Bentang Pustaka', 'Deepublish',
            'Erlangga', 'Kanisius', 'McGraw-Hill', 'Pearson Education',
            'Oxford University Press', 'Cambridge University Press', 'Springer'
        ];

        foreach ($publishers as $publisher) {
            Publisher::create(['name' => $publisher]);
        }
    }
}
