<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identity')
                    ->columns(2)
                    ->components([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(120),

                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(160),

                        DateTimePicker::make('email_verified_at')
                            ->label('Email verified at')
                            ->seconds(false)
                            ->columnSpanFull(),
                    ]),

                Section::make('Password')
                    ->description(fn (string $operation) => $operation === 'edit'
                        ? 'Leave both fields empty to keep the current password.'
                        : 'Minimum 8 characters.'
                    )
                    ->columns(2)
                    ->components([
                        TextInput::make('password')
                            ->password()
                            ->revealable()
                            ->minLength(8)
                            ->maxLength(255)
                            ->required(fn (string $operation) => $operation === 'create')
                            ->dehydrated(fn (?string $state) => filled($state))
                            ->dehydrateStateUsing(fn (string $state) => Hash::make($state))
                            ->live(debounce: 400)
                            ->same('password_confirmation'),

                        TextInput::make('password_confirmation')
                            ->label('Confirm password')
                            ->password()
                            ->revealable()
                            ->required(fn (Get $get) => filled($get('password')))
                            ->dehydrated(false),
                    ]),

                Section::make('Roles')
                    ->description('Roles defined in Filament Shield. `super_admin` bypasses all policies.')
                    ->components([
                        Select::make('roles')
                            ->label('Assigned roles')
                            ->multiple()
                            ->relationship('roles', 'name')
                            ->options(fn () => Role::pluck('name', 'id'))
                            ->preload()
                            ->searchable(),
                    ]),
            ]);
    }
}
