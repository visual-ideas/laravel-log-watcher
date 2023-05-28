<?php

namespace VI\LaravelLogWatcher;

use Illuminate\Log\Events\MessageLogged;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use VI\LaravelLogWatcher\Listeners\LogMessageListener;

class LaravelLogWatcherProvider extends ServiceProvider
{

    public function register()
    {
        //$this->app->bind('settings', function ($app) {
        //    return new LaravelSiteSettings();
        //});
        //
        //$this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravelsitesettings');
        //
        //if (config('laravelsitesettings.filament')) {
        //    $this->app->register(FilamentLaravelSiteSettingsProvider::class);
        //}
    }

    public function boot()
    {

        Event::listen(
            MessageLogged::class,
            [LogMessageListener::class, 'handle']
        );

        //$this->app->make('config')->set('logging.channels.laravel-log-watcher', [
        //    'driver' => 'custom',
        //    'via' => \VI\LaravelLogWatcher\Logging\SQLightLogger::class,
        //]);

        //if ($this->app->runningInConsole()) {
        //
        //    $this->publishes([
        //        __DIR__ . '/../config/config.php' => config_path('laravelsitesettings.php'),
        //    ], 'config');
        //
        //    $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        //
        //} else {
        //    config(['settings' => app('settings')->all()]);
        //}
        //
        //Blade::directive('settings', function ($expression) {
        //    return "<?php echo settings($expression); ";
        //});
        //
        //Setting::observe(LSSObserver::class);
        //SettingGroup::observe(LSSObserver::class);

    }

}