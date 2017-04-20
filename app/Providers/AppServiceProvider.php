<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::directive('datetime', function ($expression) {
        return "<?php echo {$expression}->format('d/m/Y H:i'); ?>";
        });
      Blade::directive('nl2br', function ($expression) {
        return "<?php echo nl2br(e($expression)) ?>";
      });
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
