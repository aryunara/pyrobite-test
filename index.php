<?php

use App\Exceptions\CreatingException;
use App\Exceptions\FormatterException;
use App\Exceptions\InvalidDataException;
use App\MapGenerator;

require_once __DIR__ . '/vendor/autoload.php';

$pages = [
    [
        'loc' => 'https://site.ru/',
        'lastmod' => '2020-12-14',
        'priority' => 1,
        'changefreq' => 'hourly'
    ],
    [
        'loc' => 'https://site.ru/news',
        'lastmod' => '2020-12-10',
        'priority' => 0.5,
        'changefreq' => 'daily'
    ],
    [
        'loc' => 'https://site.ru/about',
        'lastmod' => '2020-12-07',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ],
    [
        'loc' => 'https://site.ru/products',
        'lastmod' => '2020-12-12',
        'priority' => 0.5,
        'changefreq' => 'daily'
    ],
    [
        'loc' => 'https://site.ru/products/ps5',
        'lastmod' => '2020-12-11',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ],
    [
        'loc' => 'https://site.ru/products/xbox',
        'lastmod' => '2020-12-12',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ],
    [
        'loc' => 'https://site.ru/products/wii',
        'lastmod' => '2020-12-11',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ],
];

$fileType = 'xml';
$filePath = 'site.ru/upload/sitemap.xml';

try {
    $mapGenerator = new MapGenerator($pages, $fileType, $filePath);
    $mapGenerator->generate();
} catch (InvalidDataException|FormatterException|CreatingException $exception) {
    print_r($exception->getMessage());
}
