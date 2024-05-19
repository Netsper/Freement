<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings as SpatieGeneralSettings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Filament\Resources\Components\Tab;

class GeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon  = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';

    protected static string $settings = SpatieGeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                     ->schema([
                         Section::make('Basic Settings')
                                ->schema([
                                    TextInput::make('site_name')
                                             ->label('Site Name')
                                             ->required()
                                             ->placeholder('Enter the name of your site'),
                                    Textarea::make('site_description')
                                            ->label('Site Description')
                                            ->placeholder('Enter the description of your site')
                                            ->hint('This will be used as the meta description for your site'),
                                ]),

                         Section::make('SMTP Settings')
                                ->schema([
                                    Select::make('mail_driver')
                                          ->columnSpanFull()
                                          ->native(false)
                                          ->label('Mail Driver')
                                          ->options([
                                              'smtp'     => 'SMTP',
                                              'mail'     => 'Mail',
                                              'sendmail' => 'Sendmail',
                                              'mailgun'  => 'Mailgun',
                                              'ses'      => 'SES',
                                              'postmark' => 'Postmark',
                                              'log'      => 'Log'
                                          ])
                                          ->prefixIcon('heroicon-o-inbox'),
                                    TextInput::make('mail_host')
                                             ->label('Mail Host')
                                             ->placeholder('Enter the mail host')
                                             ->prefixIcon('heroicon-o-server'),
                                    TextInput::make('mail_port')
                                             ->label('Mail Port')
                                             ->placeholder('Enter the mail port')
                                             ->prefixIcon('heroicon-o-bolt'),
                                    TextInput::make('mail_username')
                                             ->label('Mail Username')
                                             ->placeholder('Enter the mail username')
                                             ->prefixIcon('heroicon-o-user'),
                                    TextInput::make('mail_password')
                                             ->label('Mail Password')
                                             ->placeholder('Enter the mail password')
                                             ->prefixIcon('heroicon-o-key')
                                             ->password()
                                             ->revealable(),
                                    Select::make('mail_encryption')
                                          ->columnSpanFull()
                                          ->label('Mail Encryption')
                                          ->placeholder('Enter the mail encryption')
                                          ->prefixIcon('heroicon-o-lock-closed')
                                          ->native(false)
                                          ->options([
                                              'ssl' => 'SSL (Recommended)',
                                              'tls' => 'TLS',
                                          ]),
                                    TextInput::make('mail_from_address')
                                             ->label('Mail From Address')
                                             ->placeholder('Enter the mail from address')
                                             ->prefixIcon('heroicon-o-envelope'),
                                    TextInput::make('mail_from_name')
                                             ->label('Mail From Name')
                                             ->placeholder('Enter the mail from name')
                                             ->prefixIcon('heroicon-o-user'),
                                ])
                                ->columns(2),
                         Tabs::make('Custom Codes')
                             ->tabs([
                                 Tabs\Tab::make('Header')
                                         ->schema([
                                             Placeholder::make('header_code')
                                                        ->label('Header Code')
                                         ]),
                                 Tabs\Tab::make('Footer')
                                         ->schema([
                                             Placeholder::make('footer_code')
                                                        ->label('Footer Code')
                                         ]),
                                 Tabs\Tab::make('Custom CSS')
                                         ->schema([
                                             Placeholder::make('custom_css')
                                                        ->label('Custom CSS')
                                         ]),
                             ])
                     ])
                     ->columnSpan(2),
                Group::make()
                     ->schema([
                         Section::make('Favicon')
                                ->schema([
                                    SpatieMediaLibraryFileUpload::make('site_favicon')
                                                                ->hiddenLabel()
                                                                ->label('Site Logo')
                                                                ->placeholder('Upload your site logo')
                                ])
                                ->columnSpan(1),
                         Section::make('Logo')
                                ->schema([
                                    FileUpload::make('brand_logo')
                                              ->label('Light Theme Logo')
                                              ->image()
                                              ->visibility('public')
                                              ->moveFiles()
                                              ->placeholder('Upload your site logo'),
                                    FileUpload::make('dark_brand_logo')
                                              ->label('Dark Theme Logo')
                                              ->image()
                                              ->visibility('public')
                                              ->moveFiles()
                                              ->placeholder('Upload your site logo')
                                ]),
                         Section::make('Statuses')
                                ->schema([
                                    Toggle::make('site_active')
                                          ->inline(true)
                                          ->label('Allow anyone to access the site')
                                          ->onIcon('heroicon-m-check')
                                          ->onColor('success')
                                          ->offIcon('heroicon-m-arrow-down-left')
                                          ->offColor('danger')
                                ]),
                     ])
            ])
            ->columns(3);
    }
}
