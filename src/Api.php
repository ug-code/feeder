<?php

namespace Sitemap;

use SimpleXMLElement;
use Sitemap\Platform\PlatformInterface;

class Api
{
    /** @var Feeder $feeder */
    private $feeder;

    /** @var PlatformInterface $platform */
    private $platform;

    public function __construct(Feeder $feeder, PlatformInterface $platform)
    {
        $this->feeder   = $feeder;
        $this->platform = $platform;
    }


    public function formatData()
    {
        return $this->feeder->getData();
    }

    public function create()
    {
        $type    = $this->feeder->getType();
        $product = $this->feeder->getData();

        return match ($type) {
            "json" => $this->platform->convertJson($product),
            "xml" =>  $this->platform->convertXml($product),
            default => null,
        };
    }


}