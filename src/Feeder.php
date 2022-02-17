<?php

namespace Sitemap;

class Feeder
{
    private array  $data;
    private string $type;

    public function __construct(array $data, string $type)
    {
        $this->data = $data;
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


}