<?php

namespace Sitemap\Platform;

use SimpleXMLElement;

abstract class BasePlatform
{


    public function convertJson(array $product)
    {
        return json_encode($product);

    }


}