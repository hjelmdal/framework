<?php

namespace WebChat\Providers;

use Nova\Module\Support\Providers\ModuleServiceProvider as ServiceProvider;


class WebChatServiceProvider extends ServiceProvider
{
    /**
     * The additional provider class names.
     *
     * @var array
     */
    protected $providers = array(
        'WebChat\Providers\AuthServiceProvider',
        'WebChat\Providers\EventServiceProvider',
        'WebChat\Providers\RouteServiceProvider',
    );


    /**
     * Bootstrap the Application Events.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
        $path = realpath(__DIR__ .'/../');

        // Configure the Package.
        $this->package('WebChat', 'web_chat', $path);

        // Bootstrap the Package.
        $path = $path .DS .'Bootstrap.php';

        $this->bootstrapFrom($path);
    }

    /**
     * Register the Dashboard module Service Provider.
     *
     * This service provider is a convenient place to register your modules
     * services in the IoC container. If you wish, you may make additional
     * methods or service providers to keep the code more focused and granular.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        //
    }

}
