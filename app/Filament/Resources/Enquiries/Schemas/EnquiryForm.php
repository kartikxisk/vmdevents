<?php

namespace App\Filament\Resources\Enquiries\Schemas;

use App\Models\Enquiry;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EnquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact')
                    ->columns(2)
                    ->components([
                        TextInput::make('first_name')->required()->maxLength(120),
                        TextInput::make('last_name')->maxLength(120),
                        TextInput::make('email')->label('Email address')->email()->required()->maxLength(160),
                        TextInput::make('phone')->tel()->maxLength(40),
                        TextInput::make('company')->maxLength(160)->columnSpanFull(),
                    ]),

                Section::make('Enquiry')
                    ->columns(2)
                    ->components([
                        Select::make('services')
                            ->label('Services of interest')
                            ->multiple()
                            ->options(Enquiry::serviceOptions())
                            ->searchable()
                            ->columnSpanFull(),
                        Textarea::make('message')
                            ->rows(5)
                            ->maxLength(5000)
                            ->columnSpanFull(),
                    ]),

                Section::make('Pipeline')
                    ->columns(2)
                    ->components([
                        Select::make('status')
                            ->options(Enquiry::STATUSES)
                            ->required()
                            ->default('new')
                            ->native(false),
                        Select::make('source')
                            ->options(Enquiry::SOURCES)
                            ->required()
                            ->default('contact_page')
                            ->native(false),
                        Textarea::make('notes')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Metadata')
                    ->columns(2)
                    ->collapsed()
                    ->components([
                        TextInput::make('ip_address')->disabled()->dehydrated(false),
                        TextInput::make('user_agent')->disabled()->dehydrated(false)->columnSpanFull(),
                    ]),
            ]);
    }
}
