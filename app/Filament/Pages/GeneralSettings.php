<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings as SpatieGeneralSettings;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class GeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';

    protected static string $settings = SpatieGeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    'label' => 'General Settings',
                ])->schema([
                    TextInput::make('site_name')
                             ->label('Site Name')
                             ->required()
                             ->placeholder('Enter the name of your site'),
                    Select::make('site_active')
                          ->label('Site Active')
                          ->options([
                              true  => 'Yes',
                              false => 'No',
                          ]),
                ]),
            ]);
    }
}
