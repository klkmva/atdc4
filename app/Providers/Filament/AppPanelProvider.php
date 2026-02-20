<?php

namespace App\Providers\Filament;

use App\Filament\App\Pages\Home;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Enums\SubNavigationPosition;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\View\PanelsRenderHook;
use Filament\Support\Enums\Width;
use Filament\Support\Assets\Css;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('app')
            ->path('/')
            ->colors([
                'primary' => Color::Zinc,
            ])
            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\Filament\App\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\Filament\App\Pages')
            ->pages([
                Home::class,
            ])
            ->navigationGroups([
                "Conférences",
                "L'association",
            ])
            ->navigationItems([
                NavigationItem::make("Prochaines conférences")
                    ->group("Conférences")
                    ->url('confnext'),
                NavigationItem::make("Conférences passées")
                    ->group("Conférences")
                    ->url('confpast'),
                NavigationItem::make("Rechercher...")
                    ->group("Conférences")
                    ->url('confsearch'),
                NavigationItem::make("Qui sommes-nous ?")
                    ->group("L'association")
                    ->url('assoinfo'),
                NavigationItem::make("Documents")
                    ->group("L'association")
                    ->url('assodocs'),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->assets([
                Css::make('app-styles', __DIR__ . '/../../../resources/css/app-styles.css'),
            ])
            ->subNavigationPosition(SubNavigationPosition::Top)
            ->spa()
            ->topNavigation()
            // ->brandLogo(fn() => view('filament.logo'))
            ->renderHook(PanelsRenderHook::TOPBAR_LOGO_AFTER, fn() => view('filament.brand'))
            // ->renderHook(PanelsRenderHook::BODY_END, fn () => view('filament.app.init'))
            ->maxContentWidth(Width::Full)
            ->darkMode(true);
    }
}
