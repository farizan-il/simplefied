<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Keranjang;

class ViewComposerServiceProvider extends ServiceProvider
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
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $keranjangtotal = 0;
            if (Auth::check()) {
                $keranjangtotal = Keranjang::where('user_credentials_id', Auth::id())->count();
            }
            $view->with('keranjangtotal', $keranjangtotal);
        });
    }
}
