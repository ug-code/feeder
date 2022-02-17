<?php

namespace Sitemap\Platform;

interface PlatformInterface
{

    function convertJson(array $product);

    function convertXml($product);
}