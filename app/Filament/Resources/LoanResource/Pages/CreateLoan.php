<?php

namespace App\Filament\Resources\LoanResource\Pages;

use App\Filament\Resources\LoanResource;
use App\Models\Book;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;

class CreateLoan extends CreateRecord
{
    protected static string $resource = LoanResource::class;

    protected function afterCreate(): void
    {
        $loan = $this->record;

        foreach ($loan->details as $item) {
            $book = $item->book;
            if ($book) {
                if ($book->stock < $item->quantity) {
                    throw new \Exception('Stok buku ' . $book->title . ' tidak mencukupi.');
                }
                $book->decrement('stock', $item->quantity);
            }
        }
    }
}
