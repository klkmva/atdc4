<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use WatheqAlshowaiter\FilamentStickyTableHeader\StickyTableHeaderPlugin;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;

class AdminPanelProvider extends PanelProvider
{
    public function boot(): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::BODY_END,
            fn() => view('components.head.tinymce-config')
        );
    }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->domain(config('app.url'))
            ->id('admin')
            ->path('admin')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->login()
            ->passwordResetRoutePrefix('password-reset')
            ->passwordResetRequestRouteSlug('request')
            ->passwordResetRouteSlug('reset')
            ->passwordReset()
            ->profile()
            ->colors([
                'primary' => Color::Amber,
                'danger' => Color::Red,
                'warning' => Color::Yellow,
                'success' => Color::Emerald,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                //
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->brandLogo(asset('icons/logo.png'))
            ->brandLogoHeight('40px')
            ->sidebarCollapsibleOnDesktop(true)
            ->maxContentWidth(Width::Full)
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Références')
                    ->collapsed(true),
                NavigationGroup::make()
                    ->label('Planning')
                    ->collapsed(true),
                NavigationGroup::make()
                    ->label('Site')
                    ->collapsed(true),
                NavigationGroup::make()
                    ->label('Administration')
                    ->collapsed(true),
            ])
            ->plugins([
                StickyTableHeaderPlugin::make(),
            ]);
    }
}
