<?php

namespace Sitemap\Platform;

use SimpleXMLElement;

class Cimri extends BasePlatform implements PlatformInterface
{

    public function convertJson($product)
    {
        $formatProduct = [];
        foreach ($product as $item) {
            $formatProduct[] = [
                "cimriId"       => $item['id'],
                "cimriName"     => $item['name'],
                "cimriPrice"    => $item['price'],
                "cimriCategory" => $item['category'],

            ];
        }

        return json_encode($formatProduct);
    }


    //custom xml for cimri
    public function convertXml($product)
    {
        Header('Content-type: text/xml');

        $simplexml = new SimpleXMLElement('<?xml version="1.0"?><data/>');

        foreach ($product as $item) {
            $tag = $simplexml->addChild('cimri');
            $tag->addChild("cimriId", $item['id']);
            $tag->addChild("cimriName", $item['name']);
            $tag->addChild("cimriPrice", $item['price']);
            $tag->addChild("cimriCategory", $item['category']);
        }

        return $simplexml->asXML();

    }
}