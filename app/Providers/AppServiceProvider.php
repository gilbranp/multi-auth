<?php

namespace App\Providers;

use App\Models\RoleMenu;
use Illuminate\Support\Facades\View;
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
        // if ( auth()->check() ) {
            // View::composer('*', function ($view) {
            //     $menus = RoleMenu::with('menu')->where('role_id', auth()->user()->role_id)->get();
            //     $view->with('menus', $menus);
            // });
        // }
    }
}
