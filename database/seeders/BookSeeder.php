<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Laskar Pelangi',
                'isbn' => '9789793062795',
                'author_id' => 1,
                'category_id' => 1,
                'publisher_id' => 1,
                'rack_id' => 1,
                'publication_year' => 2005,
                'stock' => 5
            ],
            [
                'title' => 'Negeri 5 Menara',
                'isbn' => '9786028997824',
                'author_id' => 2,
                'category_id' => 1,
                'publisher_id' => 2,
                'rack_id' => 1,
                'publication_year' => 2009,
                'stock' => 3
            ],
            // Tambahkan data lainnya seperti di atas
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
