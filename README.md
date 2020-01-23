# Laravel Model Observers

# What is Laravel Model Observers
Laravel Model Observers are used to group event listeners for a model. Observers classes method names refer to the Eloquent event you want to listen for. These methods receive the model as their only argument. Laravel does not include a default directory for observers.
Eloquent models fire several events, allowing you to hook into the following points in a model's lifecycle:

Retrieved 	: 	after a record has been retrieved.
 	
Creating 	: 	before a record has been created.
 	
Created 	: 	after a record has been created.
 	
Updating 	: 	before a record is updated.
 	
Updated 	: 	after a record has been updated.
 	
Saving 	: 	before a record is saved (either created or updated).
 	
Saved 	: 	after a record has been saved (either created or updated).
 	
Deleting 	: 	before a record is deleted or soft-deleted.
 	
Deleted 	: 	after a record has been deleted or soft-deleted.
 	
Restoring 	: 	before a soft-deleted record is going to be restored.
 	
Restored 	: 	after a soft-deleted record has been restored.

# Why We Want To Use Model Observer.
Now, suppose, if we want to concatenate the string with name or We have to add some tax to the product price, but we do not want to write the logic or function in the controller then, we can use the Model Events. It will fire automatically when the new record is created or updated or deleted. There are Some types of Model Events available in Laravel Doc

# How To Create And Use Model Observer
Create Service Provider for the Observers.
Make the service provider for the following command.

    php artisan make:provider CategoryModelServiceProvider

Register this service provider into the Laravel App. Go to the config/app.php file. Add the following code.

    'providers' => [

       App\Providers\CategoryModelServiceProvider::class,

    ]

Now run the following command it will create App/Observers/CategoryObserver file.

    php artisan make:observer CategoryObserver

Then write function of observer like this.

    public function creating(Category $category)
 
    {
 
       Log::info("========= Observer Creating ==========");
 
    }

Need to register this observer inside the App/Providers/CategoryModelServiceProvider.php file.

    public function boot()
 
    {
 
       Category::observe(CategoryObserver::class);
 
    }
   
# Installation and use

    $ git clone https://github.com/mobiosolutions/laravel-observer-example.git

    $ cp .env.example .env

Change configuration according to your need in ".env" file and create Database

    $ composer install

    $ php artisan migrate

    $ php artisan serve

# More From Our MobioSolutions Team
Read our Blog https://mobiosolutions.com/how-to-install-and-use-laravel-model-observers/
