<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentTimezone;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;

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
        FilamentTimezone::set('Europe/Paris');
        FilamentAsset::register([
            Css::make('philosopher-font', 'https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap'),
        ]);
        FilamentView::registerRenderHook(
            PanelsRenderHook::BODY_END,
            fn() => view('flux.flux-script')
        );
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn() => view('flux.flux-styles')
        );
        // Bouton de sélection mode sombre/clair
        FilamentView::registerRenderHook(
            PanelsRenderHook::TOPBAR_END,
            fn () => view('filament.app.components.dark')
        );
        FilamentAsset::register([
            Js::make('image-input', __DIR__ . '/../../resources/js/imageInput.js'),
        ]);
    }

}
