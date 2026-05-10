<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Enquiries\EnquiryResource;
use App\Models\Enquiry;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestEnquiries extends TableWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Latest enquiries')
            ->description('The 5 most recent leads from the public site.')
            ->query(
                fn (): Builder => Enquiry::query()
                    ->latest()
                    ->limit(5)
            )
            ->paginated(false)
            ->columns([
                TextColumn::make('created_at')
                    ->label('Received')
                    ->since()
                    ->tooltip(fn ($record) => $record->created_at?->format('d M Y · H:i'))
                    ->sortable(),

                TextColumn::make('full_name')
                    ->label('Name')
                    ->weight('semibold')
                    ->searchable(['first_name', 'last_name']),

                TextColumn::make('email')
                    ->copyable()
                    ->icon('heroicon-m-envelope'),

                TextColumn::make('services')
                    ->label('Interested in')
                    ->badge()
                    ->formatStateUsing(fn ($state) => Enquiry::serviceOptions()[$state] ?? $state)
                    ->separator(',')
                    ->limitList(2),

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
            ->recordActions([
                Action::make('open')
                    ->label('Open')
                    ->icon('heroicon-m-arrow-top-right-on-square')
                    ->url(fn (Enquiry $record) => EnquiryResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
