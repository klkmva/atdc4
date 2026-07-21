<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentTimezone;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Filament\Support\Assets\Js;
use Laravel\Fortify\Fortify;
use Illuminate\Http\Request;

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
            Js::make('platform', 'https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.5/platform.min.js'),
        ]);

        FilamentView::registerRenderHook(
            PanelsRenderHook::BODY_END,
            fn() => view('flux.flux-script')
        );
        
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn() => view('flux.flux-styles')
        );

        // Titre page admin
        FilamentView::registerRenderHook(
            PanelsRenderHook::TOPBAR_LOGO_AFTER,
            fn() => view('filament.brand')
        );

        View::addNamespace('layout', resource_path('views/layout'));

        ResetPassword::createUrlUsing(function (User $user, string $token) {
            return env('APP_URL') . '/reset-password/' . $token;
        });

        Fortify::loginView('auth.login');
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });
        Fortify::resetPasswordView(function (Request $request) {
            return view('auth.reset-password', ['request' => $request]);
        });
    }

}
