<?php
namespace Maree\Whatsapp;

use Illuminate\Support\ServiceProvider;

class WhatsappServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/whatsapp.php' => config_path('whatsapp.php'),
        ],'whatsapp');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/whatsapp.php', 'whatsapp'
        );
    }
}
