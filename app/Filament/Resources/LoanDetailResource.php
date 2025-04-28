<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoanDetailResource\Pages;
use App\Filament\Resources\LoanDetailResource\RelationManagers;
use App\Models\LoanDetails;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Carbon;

class LoanDetailResource extends Resource
{
    protected static ?string $model = LoanDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Transaction';

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('loan_id')
                    ->relationship('loan', 'id')
                    ->required(),
                Select::make('book_id')
                    ->relationship('book', 'title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state) {
                        $book = Book::find($state);
                        if ($book && $book->stock <= 0) {
                            throw new \Exception('Stok buku habis.');
                        }
                    }),
                TextInput::make('quantity')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('book.title')->label('Book'),
                TextColumn::make('quantity'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLoanDetails::route('/'),
            'create' => Pages\CreateLoanDetail::route('/create'),
            'edit' => Pages\EditLoanDetail::route('/{record}/edit'),
        ];
    }
}
