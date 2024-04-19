<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class Settings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    'label' => 'General Settings',
                ])->schema([
                    Forms\Components\TextInput::make('site_name')
                        ->label('Site Name')
                        ->required()
                        ->placeholder('Enter the name of your site'),
                    Forms\Components\Select::make('site_active')
                        ->label('Site Active')
                        ->options([
                            true  => 'Yes',
                            false => 'No',
                        ]),
                ]),
            ]);
    }
}
