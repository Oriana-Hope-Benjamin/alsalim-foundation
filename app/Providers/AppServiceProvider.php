<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Contact;

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
        // This injects the unreadCount variable into the topbar perfectly every time it loads
        View::composer('admin.layouts.topbar', function ($view) {
            $unreadCount = Contact::where('is_read', false)->count();
            $view->with('unreadCount', $unreadCount);
        });
    }
}
