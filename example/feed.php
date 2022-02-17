<?php

include "../src/Feeder.php";
include "../src/Api.php";
include "../src/Platform/PlatformInterface.php";
include "../src/Platform/BasePlatform.php";
include "../src/Platform/Cimri.php";
include "../src/Platform/Facebook.php";
include "../src/Platform/Google.php";

use Sitemap\Api;
use Sitemap\Feeder;
use Sitemap\Platform\Facebook;
use Sitemap\Platform\Google;
use Sitemap\Platform\Cimri;


$data = [
    0 => [
        'id'       => 1,
        'name'     => 'Product 1',
        'price'    => 1.0,
        'category' => 'Electronic',
    ],
    1 => [
        'id'       => 2,
        'name'     => 'Product 2',
        'price'    => 2.0,
        'category' => 'Fashion',
    ],
    2 => [
        'id'       => 3,
        'name'     => 'Product 3',
        'price'    => 3.0,
        'category' => 'Home Decor',
    ],
    3 => [
        'id'       => 4,
        'name'     => 'Product 4',
        'price'    => 4.0,
        'category' => 'Electronic',
    ],
    4 => [
        'id'       => 5,
        'name'     => 'Product 5',
        'price'    => 5.0,
        'category' => 'Fashion',
    ],
    5 => [
        'id'       => 6,
        'name'     => 'Product 6',
        'price'    => 6.0,
        'category' => 'Home Decor',
    ],
    6 => [
        'id'       => 7,
        'name'     => 'Product 7',
        'price'    => 7.0,
        'category' => 'Electronic',
    ],
    7 => [
        'id'       => 8,
        'name'     => 'Product 8',
        'price'    => 8.0,
        'category' => 'Fashion',
    ],
    8 => [
        'id'       => 9,
        'name'     => 'Product 9',
        'price'    => 9.0,
        'category' => 'Home Decor',
    ],
    9 => [
        'id'       => 10,
        'name'     => 'Product 10',
        'price'    => 10.0,
        'category' => 'Electronic',
    ],
];
//example facebook xml
$fApi       = new Api(new Feeder($data, "xml"), new Facebook());
$fApiFeeder = $fApi->create();

print_r($fApiFeeder);

//example google json
$gApi       = new Api(new Feeder($data, "json"), new Google());
$gApiFeeder = $gApi->create();

print_r($gApiFeeder);
