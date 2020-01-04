<?php

namespace App\Observer;

use Log;
use app\Category;

class CategoryObserver
{

    /**
     * retrieved observer method will call when all data get/retrieved
     * 
     */
    public function retrieved(Category $category)
    {
        if ($category->name) {
            $category->name = $category->name . ' category retrieved';
        }
        Log::info("========= Observer retrieved ==========");
    }

    /**
     * creating observer method will call when new data is create
     * 
     */
    public function creating(Category $category)
    {
        if ($category->name) {
            $category->name = $category->name . ' category creating';
        }
        Log::info("========= Observer Creating ==========");
    }

    /**
     * created observer method will call after created new data successfully
     * 
     */
    public function created(Category $category)
    {
        Log::info("========= Observer Created ==========");
    }

    /**
     * saving observer method will call when new data getting creating.
     * 
     */
    public function saving(Category $category)
    {
        if ($category->name) {
            $category->name = $category->name . ' category saving';
        }
        Log::info("========= Observer saving ==========");
    }

    /**
     * saved observer method will call before created data.
     * 
     */
    public function saved(Category $category)
    {
        Log::info("========= Observer saved ==========");
    }

    /**
     * updating observer method will call during updating data.
     * 
     */
    public function updating(Category $category)
    {
        if ($category->description) {
            $category->description = $category->description . ' category updating';
        }
        Log::info("========= Observer Updating ==========");
    }

    /**
     * updated observer method will call after updated data.
     * 
     */
    public function updated(Category $category)
    {

        Log::info("========= Observer Updated ==========");
    }


    /**
     * deleting observer method will call during deleting data.
     * 
     */
    public function deleting(Category $category)
    {

        Log::info("========= Observer deleting ==========");
    }

    /**
     * deleted observer method will call after deleted data.
     * 
     */
    public function deleted(Category $category)
    {

        Log::info("========= Observer deleted ==========");
    }

    /**
     * restoring observer method will call when restoring deleted data.
     * 
     */
    public function restoring(Category $category)
    {
        if ($category->description) {
            $category->description = $category->description . ' category restoring';
        }
        Log::info("========= Observer restoring ==========");
    }

    /**
     * restored observer method will call after restoring deleted data.
     * 
     */
    public function restored(Category $category)
    {
        if ($category->description) {
            $category->description = $category->description . ' category restored';
        }
        Log::info("========= Observer restored ==========");
    }
}
