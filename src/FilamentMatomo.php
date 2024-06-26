<?php

namespace MarcoGermani87\FilamentMatomo;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\View\PanelsRenderHook;

class FilamentMatomo implements Plugin
{
    public function getId(): string
    {
        return FilamentMatomoServiceProvider::$name;
    }

    public function register(Panel $panel): void
    {
        $panel->renderHook(
            PanelsRenderHook::BODY_END,
            fn () => view('filament-matomo::tracking'),
        );
    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }
}
