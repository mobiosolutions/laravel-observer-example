<?php

namespace App\Listeners;

use App\Jobs\CategoryJob;
use App\Events\CategoryEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CategoryEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CategoryEvent  $event
     * @return void
     */
    public function handle(CategoryEvent $event)
    {
        \Log::info('====== Category EventListener  ========');
        CategoryJob::dispatch();
    }
}
