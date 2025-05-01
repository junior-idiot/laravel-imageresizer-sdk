<?php
declare(strict_types=1);

namespace M1n64\LaravelImageResizer\Providers;

use Illuminate\Support\ServiceProvider;
use M1n64\ImageResizer\Client;

class ImageResizerServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/image-resizer.php', 'image_resizer');

        $this->app->singleton(Client::class, function ($app) {
            return new Client(
                xApiKey: config('image_resizer.api_key'),
                baseUrl: config('image_resizer.base_url')
            );
        });
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/image-resizer.php' => config_path('image-resizer.php'),
        ], 'config');
    }
}