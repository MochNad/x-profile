<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $menus = json_decode(file_get_contents(public_path('json/menu.json')), true);

        view()->composer('components.layouts.pages.app', function ($view) use ($menus) {
            $view->with('menus', $menus);
        });
    }
}
