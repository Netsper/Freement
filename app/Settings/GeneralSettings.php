<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string  $site_name;
    public string  $site_description;
    public ?string $brand_logo;
    public ?string $dark_brand_logo;
    public ?string $site_favicon;
    public bool    $site_active;

    public static function group(): string
    {
        return 'general';
    }
}
