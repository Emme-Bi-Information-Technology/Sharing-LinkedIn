<?php

namespace EmmeBi\SharingLinkedin\Facades;

class SharingLinkedin extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return Emme-Bi\Sharing-Linkedin\Sharing-Linkedin::class;
    }
}
