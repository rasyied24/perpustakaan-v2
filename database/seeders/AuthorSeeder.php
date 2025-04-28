<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            'Andrea Hirata', 'Tere Liye', 'Habiburrahman El Shirazy', 'Dewi Lestari',
            'J.K. Rowling', 'Dan Brown', 'Stephen Hawking', 'Yuval Noah Harari',
            'B.J. Habibie', 'Ahmad Tohari', 'Ernest Hemingway', 'Haruki Murakami',
            'Pramoedya Ananta Toer', 'George Orwell', 'Napoleon Hill'
        ];

        foreach ($authors as $author) {
            Author::create(['name' => $author]);
        }
    }
}
