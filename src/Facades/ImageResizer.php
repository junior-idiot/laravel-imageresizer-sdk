<?php
declare(strict_types=1);

namespace M1n64\LaravelImageResizer\Facades;

use Illuminate\Support\Facades\Facade;

class ImageResizer extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \M1n64\ImageResizer\Client::class;
    }
}