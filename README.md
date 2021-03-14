# laravel-minio-storage-config
how to configure laravel and have a docker for minio


docker run -p 9000:9000 minio/minio server /data

## file .env
```php
FILESYSTEM_DRIVER=minio
FILESYSTEM_CLOUD=minio
AWS_ACCESS_KEY_ID=minioadmin
AWS_SECRET_ACCESS_KEY=minioadmin
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=local
AWS_ENDPOINT=http://127.0.0.1:9000
```

## config/filestorage.php
```php
'minio' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'endpoint' => env('AWS_ENDPOINT'),
            'url' => env('AWS_URL'),
            'use_path_style_endpoint' => true,
        ],
```

and line 29
```php
'cloud' => env('FILESYSTEM_CLOUD', 'minio'),
```
