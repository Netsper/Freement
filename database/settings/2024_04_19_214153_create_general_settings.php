<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Freement');
        $this->migrator->add('general.site_description', 'A free and open-source FilamentPHP Starter Kit.');
        $this->migrator->add('general.brand_logo', 'logo.png');
        $this->migrator->add('general.dark_brand_logo', 'dark_logo.png');
        $this->migrator->add('general.site_favicon', 'favicon.ico');
        $this->migrator->add('general.site_active', true);
    }
};
