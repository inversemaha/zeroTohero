<?php

namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation
{
    private $satellite;
    private  $map;

    public function __construct(Map $map, Satellite $satellite)
    {
        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function search(string $name)
    {
        $location = $this->map->findAddress($name);
        return $this->satellite->getCoordinates($location);
    }

}
