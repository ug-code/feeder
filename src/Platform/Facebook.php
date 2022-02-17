<?php

namespace Sitemap\Platform;

use SimpleXMLElement;

class Facebook extends BasePlatform implements PlatformInterface
{


    public function convertJson($product)
    {
        $formatProduct = [];
        foreach ($product as $item) {
            $formatProduct[] = [
                "facebookId"       => $item['id'],
                "facebookName"     => $item['name'],
                "facebookPrice"    => $item['price'],
                "facebookCategory" => $item['category'],

            ];
        }

        return json_encode($formatProduct);
    }


    //custom xml for Facebook
    public function convertXml($product)
    {
        Header('Content-type: text/xml');

        $simplexml = new SimpleXMLElement('<?xml version="1.0"?><data/>');

        foreach ($product as $item) {
            $tag = $simplexml->addChild('facebookTag');
            $tag->addChild("facebookId", $item['id']);
            $tag->addChild("facebookName", $item['name']);
            $tag->addChild("facebookPrice", $item['price']);
            $tag->addChild("facebookCategory", $item['category']);
        }

        return $simplexml->asXML();

    }
}