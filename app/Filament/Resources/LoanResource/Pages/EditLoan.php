<?php

namespace App\Filament\Resources\LoanResource\Pages;

use App\Filament\Resources\LoanResource;
use Filament\Resources\Pages\EditRecord;
use App\Models\Book;

class EditLoan extends EditRecord
{
    protected static string $resource = LoanResource::class;

    protected function afterSave(): void
    {
        $loan = $this->record;

        if ($loan->status === 'returned') {
            foreach ($loan->details as $item) {
                $book = $item->book;
                if ($book) {
                    $book->increment('stock', $item->quantity);
                }
            }
        }
    }
}
