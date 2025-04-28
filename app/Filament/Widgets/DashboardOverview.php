<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Loan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;


class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Total number of books')
                ->color('success'),

            Stat::make('Total Loans', Loan::count())
                ->description('Total number of loans')
                ->color('primary'),
        ];
    }
}
