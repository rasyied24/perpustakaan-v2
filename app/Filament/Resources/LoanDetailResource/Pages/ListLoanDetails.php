<?php

namespace App\Filament\Resources\LoanDetailResource\Pages;

use App\Filament\Resources\LoanDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoanDetails extends ListRecords
{
    protected static string $resource = LoanDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
