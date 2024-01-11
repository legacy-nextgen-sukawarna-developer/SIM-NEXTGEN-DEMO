<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;
use BezhanSalleh\FilamentLanguageSwitch\Enums\Placement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['id', 'en', 'ko', 'ja', 'zh_CN', 'zh_TW'])
                ->visible(insidePanels: true)
                ->flags([
                    'id' => asset('images/flags/id.svg'),
                    'en' => asset('images/flags/us.svg'),
                    'ko' => asset('images/flags/kr.svg'),
                    'ja' => asset('images/flags/jp.svg'),
                    'zh_CN' => asset('images/flags/cn.svg'),
                    'zh_TW' => asset('images/flags/tw.svg'),
                ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
