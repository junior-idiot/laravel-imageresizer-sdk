# Laravel Image Resizer SDK

A Laravel wrapper for [m1n64/image-resizer-sdk](https://github.com/m1n64/image-resizer-sdk) that provides seamless integration via service provider and facade.

## Installation

```bash
composer require fromjun/laravel-imageresizer-sdk
```

## Configuration

To publish the configuration file:

```bash
php artisan vendor:publish --tag=config
```

Add the following to your `.env` file:

```
IMAGE_RESIZER_API_KEY=your-api-key
IMAGE_RESIZER_BASE_URL=http://imageresizer:5689
```

## Usage

Using the facade:

```php
use ImageResizer;

ImageResizer::ping(); // Check connection
ImageResizer::upload('/path/to/image.jpg');
```

Using dependency injection:

```php
use M1n64\ImageResizer\Client;

public function __construct(protected Client $client) {}

public function store()
{
    $response = $this->client->upload($filePath);
}
```

## Original SDK

➡️ [github.com/m1n64/image-resizer-sdk](https://github.com/m1n64/image-resizer-sdk) - PHP SDK

➡️ [github.com/m1n64/image-resizing-shared-service](https://github.com/m1n64/image-resizing-shared-service) - Service

