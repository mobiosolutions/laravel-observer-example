<?php

namespace App\Providers;

use App\Category;
use App\Observer\CategoryObserver;
use Illuminate\Support\ServiceProvider;

class CategoryModelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * run category model observer
     *
     * @return void
     */
    public function boot()
    {
        Category::observe(CategoryObserver::class);
        
    }

   
}
