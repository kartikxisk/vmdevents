<?php

namespace App\Filament\Resources\Enquiries\Tables;

use App\Models\Enquiry;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class EnquiriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('d M Y · H:i')
                    ->sortable(),

                TextColumn::make('full_name')
                    ->label('Name')
                    ->searchable(['first_name', 'last_name'])
                    ->sortable(['first_name'])
                    ->weight('semibold'),

                TextColumn::make('email')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('phone')
                    ->toggleable()
                    ->copyable(),

                TextColumn::make('company')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('services')
                    ->badge()
                    ->formatStateUsing(fn ($state) => Enquiry::serviceOptions()[$state] ?? $state)
                    ->separator(',')
                    ->toggleable(),

                TextColumn::make('source')
                    ->badge()
                    ->formatStateUsing(fn ($state) => Enquiry::SOURCES[$state] ?? $state)
                    ->color(fn ($state) => $state === 'modal' ? 'info' : 'gray'),

                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn ($state) => Enquiry::STATUSES[$state] ?? $state)
                    ->color(fn (string $state): string => match ($state) {
                        'new'         => 'warning',
                        'in_progress' => 'info',
                        'won'         => 'success',
                        'lost'        => 'danger',
                        'spam'        => 'gray',
                        default       => 'gray',
                    }),
            ])
            ->filters([
                SelectFilter::make('status')->options(Enquiry::STATUSES),
                SelectFilter::make('source')->options(Enquiry::SOURCES),
                SelectFilter::make('services')
                    ->label('Service of interest')
                    ->options(Enquiry::serviceOptions())
                    ->query(function ($query, array $data) {
                        $value = $data['value'] ?? null;
                        return $value
                            ? $query->whereJsonContains('services', $value)
                            : $query;
                    }),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
