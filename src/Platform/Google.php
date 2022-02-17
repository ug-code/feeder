<?php

namespace Sitemap\Platform;

use SimpleXMLElement;

class Google extends BasePlatform implements PlatformInterface
{


    public function convertJson($product)
    {
        $formatProduct = [];
        foreach ($product as $item) {

            $formatProduct[] = [
                "googleId"       => $item['id'],
                "googleName"     => $item['name'],
                "googlePrice"    => $item['price'],
                "googleCategory" => $item['category'],

            ];
        }

        return json_encode($formatProduct);
    }

    //custom xml for Google
    public function convertXml($product)
    {
        Header('Content-type: text/xml');

        $simplexml = new SimpleXMLElement('<?xml version="1.0"?><data/>');

        foreach ($product as $item) {
            $tag = $simplexml->addChild('googleTag');
            $tag->addChild("googleId", $item['id']);
            $tag->addChild("googleName", $item['name']);
            $tag->addChild("googlePrice", $item['price']);
            $tag->addChild("googleCategory", $item['category']);
        }

        return $simplexml->asXML();

    }
}