<?php

namespace App\Providers;

use App\Source\StaticBlock;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $staticBlockTop = \Helper::getStaticBlockPageByPosition(\Helper::getBaseRouteCurrent($this->app->request->getRequestUri()), StaticBlock::STATIC_BLOCK_TOP);
        $staticBlockBottom = \Helper::getStaticBlockPageByPosition(\Helper::getBaseRouteCurrent($this->app->request->getRequestUri()), StaticBlock::STATIC_BLOCK_BOTTOM);
        View::share('staticBlockTop', $staticBlockTop);
        View::share('staticBlockBottom', $staticBlockBottom);
        \Schema::defaultStringLength(191);
    }
}
