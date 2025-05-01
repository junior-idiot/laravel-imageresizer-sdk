<?php
declare(strict_types=1);

return [
    'api_key' => env('IMAGE_RESIZER_API_KEY'),
    'base_url' => env('IMAGE_RESIZER_BASE_URL', 'http://localhost:5689'),
    'public_url' => env('IMAGE_RESIZER_PUBLIC_URL', 'http://localhost:5689'),
];