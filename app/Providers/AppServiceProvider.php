<?php

namespace App\Providers;

use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['en','tr'])
                ->flags([
                    'en' => asset('flags/uk.svg'),
                    'tr' => asset('flags/tr.svg')
                ])
                ->renderHook(PanelsRenderHook::USER_MENU_PROFILE_AFTER); // also accepts a closure
        });
    }
}
