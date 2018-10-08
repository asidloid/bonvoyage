<?php

namespace App\Providers;
use App\Models\Menu;
use App\Models\Podmenu;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
             //
               //  view()->share('name', 'XXXXXXXXXX');
                        $men =  Menu::with('podmenu')->get();
                               //dd ($men);
                         view()->share('men',$men);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
