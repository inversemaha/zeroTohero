<?php

namespace App\Services\Geolocation;

use Illuminate\Support\Facades\Facade;

/***
 * @method static search(string $name)
 * @see \App\Services\Geolocation\Geolocation
 */
class GeolocationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Geolocation::class;
    }

}
